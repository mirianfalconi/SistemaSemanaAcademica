<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Task extends Model {

	protected $table = 'tasks';
	protected $fillable = ['id', 'curso', 'professor', 'inicio', 'fim', 'diatodo'];

	public function users()
    {
        return $this->belongsToMany('App\User', 'task_user');
    }

}
