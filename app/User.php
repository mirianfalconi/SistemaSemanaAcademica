<?php namespace App;

use App\Task;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract  {

	use Authenticatable, CanResetPassword;


	protected $table = 'users';
	protected $fillable = ['cpf', 'nome', 'email', 'telefone', 'password'];

	protected $hidden = ['password', 'remember_token'];

		public function tasks()
  	{
			return $this->belongsToMany('App\Task', 'task_user')
			->withPivot('task_id');

		}

}
