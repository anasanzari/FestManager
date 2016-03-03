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
      <table class="table table-hover">
        <tr>
          <th>Name</th>
          <th>Details</th>
          <th>Link</th>
        </tr>
        @foreach($events as $event)
         <tr>
           <td>{{$event->name}}</td>
           <td>{{$event->details}}</td>
           <td><a href="{{url('/department/showfest/editevent/'.$event->id.'')}}" class="btn btn-link">Edit</a></td>
         </tr>
        @endforeach
      </table>
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
{!! Html::script('js/owl.carousel.js') !!}
<script>

$(document).ready(function() {

      $("#owl-demo").owlCarousel({

          autoPlay: 3000, //Set AutoPlay to 3 seconds

          items : 4,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [979,3]

      });

      $(".hash").click(function(event){
         // alert("hey");
         event.preventDefault();
         $('html,body').stop().animate({scrollTop:$(this.hash).offset().top},1000);
      });


    });

</script>
@endsection
