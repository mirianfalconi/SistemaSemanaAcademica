<?php namespace app;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model  {

	protected $table = 'users';
	protected $fillable = ['cpf', 'nome', 'email', 'telefone'];

/*	public function relTaskUser()
    {
        return $this->belongsTo(RelTaskUser::class);
    }
*/
}
