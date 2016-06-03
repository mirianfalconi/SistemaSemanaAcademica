<?php namespace app\Http\Controllers;

use Auth;
use app\Task;
use app\User;
use DB;
use app\Http\Controllers\Controller;
use Request;
use Session;
use App;

class UserController extends PrintController {

	private $user_id;
	private $user;


	public function __construct()
	{
		if(Auth::user()){
			$this->user_id = Auth::user()->id;
			$this->user = User::find($this->user_id);


		 if($this->user->tasks->isEmpty()){

				$this->user->tasks()->sync(Session::get('key'));
				$this->imprimePDF();

			}
		}
	}

	public function acesso($id){

		$this->user_id = $id;
		$this->user = User::find($this->user_id);
		return $this->index();
	}

	public function index()
	{

	try{

			return view('taskpost', [
				'quinta' => $this->showUserDia(5),
				'sexta'  => $this->showUserDia(6),
				'sabado' => $this->showUserDia(7)
			]);

	}	catch(\Exception $e) {	}

		return redirect('/');
	}


	private function showUserDia($dia)
	{
		$this->user = User::find($this->user_id);

		foreach ($this->user->tasks as $relaciona)
		{

			$taskes[] = DB::table('tasks')
				->where('id', '=', $relaciona->pivot->task_id)
				->whereDay('inicio', '=', date($dia))
				->orderBy('inicio')
				->get();

			$taskes[] = DB::table('tasks')
				->where('diatodo', '=', $relaciona->pivot->task_id)
				->whereDay('inicio', '=', date($dia))
				->orderBy('inicio')
				->get();
		}
		return $taskes;
	}


}
