<?php namespace app\Http\Controllers;

use Auth;
use app\User;
use DB;
use app\Http\Requests;
use app\Http\Controllers\Controller;
use App;
use Mail;

use Illuminate\Http\Request;

class PrintController extends Controller {

	public function imprimePDF(){

		try{
 				$user = [Auth::user()->email, Auth::user()->nome ];

 					Mail::send('users.mails.welcome', $user, function ($m) use ($user){
 											$m->from('naoresponda@osorio.ifrs.edu.br', 'Seminário Academico Integrado');
 											$m->to($user[0]	, $user[1]);
 											$m->subject('Semana Acadêmica Integrada - Confirmação de Inscrição');
 					});
			}	catch(\Exception $e) {	}

 		}


}
