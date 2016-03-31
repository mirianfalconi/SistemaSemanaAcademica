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
			'quinta' => $this->showDia(5),
			'sexta'  => $this->showDia(6),
			'sabado' => $this->showDia(7)
		]);
	}

	public function create()
	{
		return view('taskpost', [
			'quinta' => $this->showUserDia(5),
			'sexta'  => $this->showUserDia(6),
			'sabado' => $this->showUserDia(7)
		]);
	}


	public function store(Request $request){

		try{
			$this->user->tasks()->sync($request::get('task'));
			return redirect('create');
		}	catch(\Exception $e) {	}
	}

	private function showUserDia($dia)
	{
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

	private function showDia($dia)
	{
		$taskes[] = DB::table('tasks')
			->whereDay('inicio', '=', date($dia))
			->orderBy('inicio')
			->get();

		return $taskes;
	}


}
