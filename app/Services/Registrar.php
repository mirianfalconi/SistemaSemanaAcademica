<?php namespace app\Services;

use app\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {


	public function validator(array $data)
	{
		return Validator::make($data, [
			'cpf' =>'required',
			'nome' => 'required|max:255',
			'telefone'=>'required',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	public function create(array $data)
	{
		return User::create([
			'cpf' => $data['cpf'],
			'nome' => $data['nome'],
			'telefone' => $data['telefone'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
	}

}
