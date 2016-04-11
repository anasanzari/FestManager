@extends('app')

@section('meta')

@endsection

@section('content')

@include('includes.nav')

<div class="user_fest">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">

        <h1>{{$event->name}}</h1>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3 eventdetails">
              <ul class="list-group">
                <li class="list-group-item">Fest :{{$fest->name}} </li>
                <li class="list-group-item">Department : {{$fest->department}}</li>
                <li class="list-group-item">Date: {{$fest->fromDate->format('jS F, Y')}} to {{$fest->toDate->format('jS F, Y')}}</li>
                <li class="list-group-item">Venue: {{$event->venue}}</li>
                <li class="list-group-item">Manager: {{$event->manager}}</li>
                <li class="list-group-item">Contact: {{$event->contact}}</li>
              </ul>
              @if(($user)&&(empty($reg)))
               <a class="btn btn-success" href="{{url('/register/event/'.$fest->id.'/'.$event->id)}}">Register</a>
              @elseif(empty($reg))
               <button class="btn btn-success" style="margin-bottom: 25px;">Log In To Register</button>
              @else
               <a class="btn btn-success" href="{{url('/deregister/event/'.$fest->id.'/'.$event->id)}}">De-Register</a>
              @endif
            </div>
            <div class="col-md-9 details">
              <div class="preview">
                {!!$event->details!!}
              </div>
            </div>
          </div>
        </div>



    </div>
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
