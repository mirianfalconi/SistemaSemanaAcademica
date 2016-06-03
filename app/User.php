<?php namespace app;

use app\Task;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract  {

	use Authenticatable, CanResetPassword;


	protected $table = 'users';
	protected $fillable = ['cpf', 'nome', 'email', 'telefone', 'faculdade', 'instituicao'];


		public function tasks()
  	{
			return $this->belongsToMany('app\Task', 'task_user')
			->withPivot('task_id');

		}

}

