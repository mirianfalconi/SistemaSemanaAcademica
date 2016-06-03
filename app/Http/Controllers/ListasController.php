<?php namespace app\Http\Controllers;

use Auth;
use app\Task;
use app\User;
use DB;
use app\Http\Controllers\Controller;
use Request;
use Session;

class ListasController extends Controller {

	private $user_id;
	private $user;
	
	public function __construct()
	{
		if(Auth::user()){
			$this->user_id = Auth::user()->id;
			$this->user = User::find($this->user_id);
		}
	}

	public function index($param1 = "", $param2 = "")
	{
		$smadi = "smadi2016";
		if(Request::input('listas') == $smadi) Session::set('listas', $smadi);
		if(Session::get('listas') != $smadi) return view('session');
		switch($param1) {
			case "chamada": {
				return view('chamada', [
					'curso' => $this->getCurso($param2)[0],
					'nomes' => $this->getNomes($param2)
				]);
				break;
			}
			case "completa": {
				return view('completa', [
					'curso' => $this->getCurso($param2)[0],
					'users' => $this->getUsers($param2)
				]);
				break;
			}
			default: {
				if(!empty($param1) && empty($param2))
					return redirect('/listas');
				
			}
		}
		return view('listas', ['listas' => $this->getLista()]);
	}

	private function getLista()
	{
		return DB::select('select id, curso, date_format(inicio, "%d/%m") as data, date_format(inicio, "%k:%i") as inicio, date_format(fim, "%k:%i") as fim from tasks order by curso');
	}
	
	private function getCurso($id) {
		return DB::select('select curso as atividade, professor as palestrante, date_format(inicio, "%d/%m") as data, date_format(inicio, "%k:%i") as inicio, date_format(fim, "%k:%i") as fim from tasks where id = ' . $id);
	}
	
	private function getNomes($id) {
		return DB::select("
			select distinct
				upper(users.nome) as nome
			from
				users,
				task_user    
			where
				users.id = task_user.user_id and
				(
					task_user.task_id in (select tasks.diatodo from tasks where tasks.id = ".$id." or tasks.diatodo = ".$id.")
					or
					task_user.task_id = ".$id."
				)
			order by
				users.nome asc
		");
	}
	
	private function getUsers($id) {
		return DB::select("
			select distinct
				upper(users.nome) as nome,
				users.cpf,
				lower(users.email) as email,
				users.telefone,
				users.faculdade as curso,
				users.instituicao
			from
				users,
				task_user    
			where
				users.id = task_user.user_id and
				(
					task_user.task_id in (select tasks.diatodo from tasks where tasks.id = ".$id." or tasks.diatodo = ".$id.")
					or
					task_user.task_id = ".$id."
				)
			order by
				users.nome asc
		");
	}
}

