<?php namespace app\Http\Controllers;

use app\Http\Requests;
use app\Http\Controllers\Controller;

use Illuminate\Http\Request;
use app\Task;
use app\User;
use DB;

class ViewController extends Controller {


	public function index()
	{
		return view('taskpost', [
		'quinta' => $this->showDia(5),
		'sexta'  => $this->showDia(6),
		'sabado' => $this->showDia(7)
		]);
	}

	private function showDia($dia)
	{
		$taskes[] = DB::table('tasks')
			->whereDay('inicio', '=', date($dia))
			->orderBy('inicio')
			->get();

		return $taskes;
	}


}
