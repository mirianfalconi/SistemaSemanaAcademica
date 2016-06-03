<?php namespace app\Http\Controllers;

use Auth;
use app\Task;
use app\User;
use DB;
use app\Http\Controllers\Controller;
use Request;
use Session;
use App;
use View;


class TaskController extends Controller {

	public function index()
	{

			return view('tasks', [
			'quinta' => $this->showDia(5),
			'sexta'  => $this->showDia(6),
			'sabado' => $this->showDia(7)
		]);
	}


	public function store(Request $request){

		Session::put('key', $request::get('task'));
		return redirect('auth/register');

	}


	private function showDia($dia)
	{
		$taskes[] =  DB::select('call completa('. $dia . ')');
		return $taskes;
	}


}
