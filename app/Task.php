<?php namespace app;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

	protected $table = 'tasks';
	protected $fillable = ['id', 'curso', 'professor', 'dia', 'horario'];

	
}
