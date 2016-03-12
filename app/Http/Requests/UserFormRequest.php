<?php namespace app\Http\Requests;

use app\Http\Requests\Request;

class UserFormRequest extends Request {


	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
            'cpf' =>'required',
            'nome'=>'required',
            'telefone'=>'required',
            'email'=>'unique:users,email|email'
        ];
	}

}
