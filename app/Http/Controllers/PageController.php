<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Fest;
use Auth;
use App\Event;
use App\Register;

class PageController extends Controller
{
    //
    public function __construct(){
  		$this->middleware('guest', ['except' => ['logout','notfound','fest','showevent']]);
  	}

    function index(){
      $fests = Fest::all();
      return view('index',['fests'=>$fests]);
    }

    function register(){
      $input = array('name' => '','college'=>'','email'=>'','phone' =>'');
      return view('register',['input'=>$input]);
    }

    function event(){
      return view('events.event');
    }

    function notfound(){
      return view('notfound');
    }

    public function fest($id){
      $fest = Fest::with('events')->where('id',$id)->first();
      return view('user.fest',['user'=>Auth::user(),'fest'=>$fest]);
    }

    public function showevent($id,$event){
      $user = Auth::user();
      $reg = NULL;
      if($user){
        $reg = Register::where('userid',$user->id)->where('eventid',$event)->first();
      }
      $fest = Fest::find($id);
      $event = Event::find($event);
      return view('user.event',['user'=>Auth::user(),'event'=>$event,'fest'=>$fest,'reg'=>$reg]);
    }

}
