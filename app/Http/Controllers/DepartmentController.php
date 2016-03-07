<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\Fest;
use App\User;
use App\Event;
use App\Register;
use File;

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
    $dep = Auth::user()->name;
		$fests = Fest::where('department',$dep)->get();
		return view('department.index',['user'=>Auth::user(),'fests'=>$fests]);

	}


	public function add_fest(){

 	 return view('department.newfest',['user'=>Auth::user()]);

  }

	public function showfest($id){

   $fest = Fest::find($id);
	 $events = Event::where('festid',$id)->get();
	 return view('department.fest',['user'=>Auth::user(),'fest'=>$fest,'events'=>$events]);

 }

	public function festadd(Request $request){

		$validator = Validator::make($request->all(), [
			'name' => 'required',
			'fromDate' => 'required',
			'toDate' => 'required',
			'photo' => 'required'
		]);
		if ($validator->fails()) {
					 return redirect('department/newfest')
											 ->withErrors($validator)
											 ->withInput();
		}


		$fest = Fest::create($request->all());
		$fest->imgUrl = 'images/fests'.$fest->id.".jpg";
		$fest->department = Auth::user()->name;
		$fest->save();

		$destinationPath="images/fests";
		$fileName=$fest->id.".jpg";
		 if ($request->file('photo')->isValid()) {
			 $request->file('photo')->move($destinationPath, $fileName);
		}
		else{
			Fest::destroy($fest->id);
			return redirect('department/newfest')
									 ->withErrors($validator)
									 ->withInput();
		}

		return redirect('department/dashboard');

	}

	public function edit_fest($id){

	 $fest = Fest::find($id);
 	 return view('department.editfest',['user'=>Auth::user(),'fest'=>$fest]);

  }

	public function festedit($id,Request $request){


		$fest = Fest::find($id);
		$fest->update($request->all());

		return redirect('department/dashboard');

	}

	public function add_event($id){

	 $fest = Fest::find($id);
 	 return view('department.newevent',['user'=>Auth::user(),'fest'=>$fest]);

  }


	public function eventadd($id,Request $request){

   $input = $request->all();
	 $input['festid'] = $id;
	 $event = Event::create($input);
   $fest = Fest::find($id);
	 $events = Event::where('festid',$id)->get();
 	 return view('department.fest',['user'=>Auth::user(),'fest'=>$fest,'events'=>$events]);

  }


	public function edit_event($id){

	 $event = Event::find($id);
 	 return view('department.editevent',['user'=>Auth::user(),'event'=>$event]);

  }


	public function eventedit($id,Request $request){

   $input = $request->all();
	 $event = Event::find($id);
	 $event->update($input);
   $fest = Fest::find($event->festid);
	 $events = Event::where('festid',$fest->id)->get();
 	 return view('department.fest',['user'=>Auth::user(),'fest'=>$fest,'events'=>$events]);

  }

	public function edit_photo($id){
		$fest = Fest::find($id);
		return view('department.editphoto',['user'=>Auth::user(),'fest'=>$fest]);
	}

	public function photoedit($id,Request $request){

		$validator = Validator::make($request->all(), [
			'photo' => 'required'
		]);
		if ($validator->fails()) {
					 return redirect('department/showfest/editphoto/'.$id)
											 ->withErrors($validator)
											 ->withInput();
		}


		$fest = Fest::find($id);
		$destinationPath="images/fests";
		$fileName=$fest->id.".jpg";
		 if ($request->file('photo')->isValid()) {
			 	File::delete($fest->imgUrl);
			 $request->file('photo')->move($destinationPath, $fileName);
		}
		else{
			return redirect('department/showfest/editphoto/'.$id)
									 ->withErrors($validator)
									 ->withInput();
		}

		return redirect('department/showfest/'.$id.'');

	}

	public function list_reg($id){
		$list = Register::where('eventid',$id)->get();
		$event = Event::find($id);
		$fest = Fest::find($event->festid);
		return view('department.list',['user'=>Auth::user(),'list'=>$list,'event'=>$event,'fest'=>$fest]);
	}

	public function delete_fest($id){
		$fest = Fest::find($id);
		File::delete($fest->imgUrl);
		$fest->delete();
		$dep = Auth::user()->name;
		$fests = Fest::where('department',$dep)->get();
		return view('department.index',['user'=>Auth::user(),'fests'=>$fests]);

	}

	public function delete_event($id){
		$event = Event::find($id);
		$event->delete();
 	 return redirect('department/showfest/'.$event->festid.'');

	}

}
