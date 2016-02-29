<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

use App\Fest;
use App\User;
use Redirect;
use App\Event;
use App\Register;

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

	public function event($id,$event){
    $user = Auth::user();
		$fest = Fest::find($id);
		$reg = Register::where('userid',$user->id)->where('eventid',$event)->first();
		$event = Event::find($event);
		return view('user.event',['user'=>Auth::user(),'event'=>$event,'fest'=>$fest,'reg'=>$reg]);
	}

	public function register($id,$event){
	 $user = Auth::user();
 	 $fest = Fest::find($id);
	 $register = new Register;
	 $register->eventid = $event;
	 $register->userid = $user->id;
	 $register->save();
 	 return view('user.fest',['user'=>$user,'fest'=>$fest]);
  }


}
