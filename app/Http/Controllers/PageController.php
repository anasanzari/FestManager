<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Fest;

class PageController extends Controller
{
    //
    public function __construct(){
  		$this->middleware('guest', ['except' => 'logout']);
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

}
