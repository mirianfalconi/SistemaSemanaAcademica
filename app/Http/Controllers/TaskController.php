<?php namespace app\Http\Controllers;

use Auth;
use app\Task;
use app\User;
use DB;
use app\Http\Requests;
use app\Http\Controllers\Controller;
use Request;

class TaskController extends Controller {

	private $user_id;
	private $user;


	public function __construct()
	{
		$this->middleware('auth');
		if(Auth::user()){
			$this->user_id = Auth::user()->id;
			$this->user = User::find($this->user_id);
		}
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
		foreach ($this->user->tasks as $relaciona)
		{  $taskes[] = DB::table('tasks')->where('id', '=', $relaciona->pivot->task_id)->get();		}

		return view('taskpost', [
			'sabado' => $taskes
		]);
	}


	public function store(Request $request){

		try{
			$this->user->tasks()->sync($request::get('task'));
			return redirect('create');
		}	catch(\Exception $e) {	}
	}

	private function showQuinta()
	{		return DB::table('tasks')->where('dia', '=', 'quinta')->get();	}

	private function showSexta()
	{		return DB::table('tasks')->where('dia', '=', 'sexta')->get();	}

	private function showSabado()
	{		return DB::table('tasks')->where('dia', '=', 'sabado')->get();	}

}
