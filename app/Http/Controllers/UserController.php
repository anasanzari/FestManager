<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

use App\Fest;

use Illuminate\Http\Request;

class UserController extends Controller {

	public function __construct(){
		$this->middleware('auth', ['except' => 'logout']);
	}

	public function index(){

		$fests = Fest::all();

		return view('user.index',['$user'=>Auth::user(),'fests'=>$fests]);

	}

	public function fest($id){
		$fest = Fest::findorFail($id);
		return view('user.fest',['$user'=>Auth::user(),'fest'=>$fest]);
	}



}
