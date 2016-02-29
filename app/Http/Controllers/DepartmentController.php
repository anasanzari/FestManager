<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

use App\Fest;
use App\User;

use Redirect;

use Illuminate\Http\Request;

class DepartmentController extends Controller {

	public function __construct(){
		$this->middleware('auth', ['except' => 'fest']);
		$user = Auth::user();

		if($user&&$user->type==User::USER_DEPARTMENT){

		}else{
				Redirect::to('notfound')->send();
		}
	}

	public function index(){

		return view('department.index');

	}


}
