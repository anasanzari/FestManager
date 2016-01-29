<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Feedback;
use App\user;
use App\Booking;

class PageController extends Controller
{
    //

    function index(){
      return view('index');
    }


}
