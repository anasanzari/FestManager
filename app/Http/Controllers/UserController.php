<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

use App\Fest;
use App\User;

use Redirect;

use Illuminate\Http\Request;

class UserController extends Controller {

	public function __construct(){
		$this->middleware('auth', ['except' => 'fest']);
		$user = Auth::user();

		if($user&&$user->type==User::USER_REGULAR){

		}else{
				Redirect::to('notfound')->send();
		}
	}

	public function index(){

		$fests = Fest::all();

		return view('user.index',['user'=>Auth::user(),'fests'=>$fests]);

	}

	public function fest($id){
		$fest = Fest::with('events')->where('id',$id)->first();
		return view('user.fest',['user'=>Auth::user(),'fest'=>$fest]);
	}



}
