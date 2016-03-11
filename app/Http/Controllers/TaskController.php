<?php namespace app\Http\Controllers;

use app\Task;
use DB;
use app\Http\Requests;
use app\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TaskController extends Controller {

	public function index()
	{
		return view('tasks', [
			'quinta' => $this->showquinta(),
			'sexta'  => $this->showsexta(),
			'sabado' => $this->showsabado()
		]);
	}

	public function create()
	{
		//
	}


	public function store()
	{
		//
	}

	public function showQuinta()
	{
		return DB::table('tasks')->where('dia', '=', 'quinta')->get();
	}

	public function showSexta()
	{
		return DB::table('tasks')->where('dia', '=', 'sexta')->get();
	}

	public function showSabado()
	{
		return DB::table('tasks')->where('dia', '=', 'sabado')->get();
	}

	public function edit($id)
	{
		//
	}


	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}

}
