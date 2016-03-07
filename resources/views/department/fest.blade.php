@extends('app')

@section('meta')

@endsection

@section('content')

@include('includes.admin_nav')

<div class="container-fluid" style="min-height:600px;padding-top:150px;">
  <div class="row">
    <div class="col-md-3 col-md-offset-1">
      <img src="{{url($fest->imgUrl)}}" class="img-responsive"/>
      <a href="{{url('/department/showfest/editphoto/'.$fest->id.'')}}" class="btn btn-link">Edit</a>
    </div>
    <div class="col-md-7">
      <h1>{{$fest->name}}</h1>
      <h2>Events</h2>

      @if(sizeof($events)>0)

        <table class="table table-hover">
          <tr>
            <th>Name</th>
            <th>Links</th>
          </tr>
          @foreach($events as $event)
           <tr>
             <td>{{$event->name}}</td>
             <td>
               <a href="{{url('/department/showfest/show/'.$event->id.'')}}" class="btn btn-link">Event Details</a>
               <a href="{{url('/department/showfest/editevent/'.$event->id.'')}}" class="btn btn-link">Edit</a>
             <a href="{{url('/department/showfest/listeventreg/'.$event->id.'')}}" class="btn btn-link">Registrations</a>
             <a href="{{url('/department/showfest/deleteevent/'.$event->id.'')}}" class="btn btn-link">Delete</a></td>
           </tr>
          @endforeach
        </table>

      @else

      <p>No events are added yet.</p>

      @endif

      <a href="{{url('/department/showfest/'.$fest->id.'/newevent')}}" class="btn btn-primary">Add Event</a>
    </div>
  </div>
</div>

<div class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-md-offset-2">
        <h3>FestManager</h3>
        <p>© 2015 FestManager.</p>
      </div>
    </div>
  </div>
</div>


@endsection

@section('script')

@endsection
