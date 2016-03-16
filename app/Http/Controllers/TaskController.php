<?php namespace app\Http\Controllers;

use app\Task;
use app\RelTaskUser;
use DB;
use app\Http\Requests;
use app\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TaskController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

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


	public function store(){
		return RelTaskUser::create($request->all());
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

}
