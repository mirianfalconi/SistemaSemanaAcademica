<?php namespace app\Services;

use app\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class Registrar implements RegistrarContract {


	public function validator(array $data)
	{
		return Validator::make($data, [
			'cpf' =>'required|unique:users|max:255',
			'nome' => 'required|max:255',
			'telefone'=>'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'faculdade'=>'required|max:255',
			'instituicao'=>'required|max:255',
		]);
	}

	public function create(array $data)
	{
		return User::create([
			'cpf' => $data['cpf'],
			'nome' => $data['nome'],
			'telefone' => $data['telefone'],
			'email' => $data['email'],
			'faculdade'  => $data['faculdade'],
			'instituicao'  => $data['instituicao'],
		]);

	}
}
