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

	public function registeredevents(){

    $user =Auth::user();
		$eventid = Register::where('userid',$user->id)->lists('eventid');
		$events = Event::whereIn('id',$eventid)->get();
		$festid = Event::whereIn('id',$events->toArray())->lists('festid');
		$fests = Fest::whereIn('id',$festid);

		return view('user.regevents',['user'=>Auth::user(),'fests'=>$fests,'events'=>$events]);

	}





	public function register($id,$event){
	 $user = Auth::user();
 	 $fest = Fest::find($id);
	 $register = new Register;
	 $register->eventid = $event;
	 $register->userid = $user->id;
	 $register->save();
 	 return Redirect::back()->with(['user'=>$user,'fest'=>$fest]);
  }
	public function deregister($id,$event){
	 $user = Auth::user();
 	 $fest = Fest::find($id);
	 $reg = Register::find($user->id)->where('eventid',$event);
	 $reg->delete();
 	 return Redirect::back()->with(['user'=>$user,'fest'=>$fest]);
  }


}
