<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Request;
use App\Fest;
use App\Event;
use Auth;
use App\User;

use Redirect;
use Carbon\Carbon;

class AdminController extends Controller {

	public function __construct(){
		$this->middleware('auth', []);
		$user = Auth::user();

		if($user&&$user->type==User::USER_ADMIN){

		}else{
				Redirect::to('notfound')->send();
		}

	}

	public function index(){

		$deps = User::where('type',2)->get();

		return view('admin.index',['user'=>Auth::user(),'deps'=>$deps]);

	}

	public function add_dep(){

 	 return view('admin.newdep',['user'=>Auth::user()]);

  }

	public function showdep($id){

   $dep = User::find($id);
	 $fests = Fest::where('department',$dep->name)->get();
	 return view('admin.department',['user'=>Auth::user(),'fests'=>$fests,'dep'=>$dep]);

 }

 public function depadd(Request $request){

  $input = $request->all();
	$input['type'] = 2;
	$input['college']="";
	$input['password'] = bcrypt($input['password']);
	$dep = User::create($input);
	$fests = Fest::where('department',$dep->name)->get();
	return view('admin.department',['user'=>Auth::user(),'dep'=>$dep,'fests'=>$fests]);

 }

 public function deletedep($id){
	 User::find($id)->delete();
	 $deps = User::where('type',2)->get();
	 return view('admin.index',['user'=>Auth::user(),'deps'=>$deps]); 
 }



}
