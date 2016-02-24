<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Request;
use App\Fest;
use App\Event;
use Auth;

class AdminController extends Controller {

	public function __construct(){
		//$this->middleware('auth', ['except' => 'fest']);
	}

	public function index(){

		$fests = Fest::all();

		return view('admin.index',['user'=>Auth::user(),'fests'=>$fests]);

	}

	public function add_fest(){

 	 return view('admin.newfest',['user'=>Auth::user()]);

  }

	public function showfest($id){

   $fest = Fest::find($id);
	 $events = Event::where('festid',$id)->get();
	 return view('admin.fest',['user'=>Auth::user(),'fest'=>$fest,'events'=>$events]);

 }

	public function festadd(Request $request){

		$validator = Validator::make($request->all(), [
			'name' => 'required',
			'department' => 'required',
			'fromDate' => 'required',
			'toDate' => 'required',
			'photo' => 'required'
		]);
		if ($validator->fails()) {
					 return redirect('admin/newfest')
											 ->withErrors($validator)
											 ->withInput();
		}


		$fest = Fest::create($request->all());
		$fest->imgUrl = 'images/fests'.$fest->id.".jpg";
		$fest->save();

		$destinationPath="images/fests";
		$fileName=$fest->id.".jpg";
		 if ($request->file('photo')->isValid()) {
			 $request->file('photo')->move($destinationPath, $fileName);
		}
		else{
			Fest::destroy($fest->id);
			return redirect('admin/newfest')
									 ->withErrors($validator)
									 ->withInput();
		}

		return redirect('admin/dashboard');

	}


	public function add_event($id){

	 $fest = Fest::find($id);
 	 return view('admin.newevent',['user'=>Auth::user(),'fest'=>$fest]);

  }


	public function eventadd($id,Request $request){

   $input = $request->all();
	 $input['festid'] = $id;
	 $event = Event::create($input);
   $fest = Fest::find($id);
	 $events = Event::where('festid',$id)->get();
 	 return view('admin.fest',['user'=>Auth::user(),'fest'=>$fest,'events'=>$events]);

  }


}
