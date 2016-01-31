<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Fest;
use Auth;

class AdminController extends Controller {

	public function __construct(){
		//$this->middleware('auth', ['except' => 'fest']);
	}

	public function index(){

		$fests = Fest::all();

		return view('admin.index',['user'=>Auth::user(),'fests'=>$fests]);

	}



}
