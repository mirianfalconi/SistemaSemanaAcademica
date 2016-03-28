<?php namespace app;

use Illuminate\Database\Eloquent\Model;
use app\User;

class Task extends Model {

	protected $table = 'tasks';
	protected $fillable = ['id', 'curso', 'professor', 'inicio', 'fim'];

	public function users()
    {
        return $this->belongsToMany('app\User', 'task_user');
    }

}
