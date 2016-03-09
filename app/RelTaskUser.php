<?php namespace app;

use Illuminate\Database\Eloquent\Model;

class RelTaskUser extends Model {

	protected $table = 'rel_task_users';
	protected $fillable = ['user_cpf', 'task_id'];

}
