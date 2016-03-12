<?php namespace app\Http\Controllers;

use app\User;
use DB;
use app\Http\Requests\UserFormRequest;
use app\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller {

	public function getIndex()
	{
		return view('inscricao');
	}


	public function postIndex(UserFormRequest $request)
	{
      User::create($request->all());
	}

  public function anyLogin()
   {
       //
   }

}
