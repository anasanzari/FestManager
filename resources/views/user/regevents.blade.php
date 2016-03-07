@extends('app')

@section('meta')

@endsection

@section('content')

@include('includes.nav')

<div class="user_fest">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">

        <h2>Registered Events</h2>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 details">
              @if(sizeof($events)==0)
                <p class="alert alert-danger center">You have not registered for any event.</p>
              @else
                <div>
                  <table class="table table-striped">
                    <tr>
                      <th>Event</th>
                      <th>Fest</th>
                      <th>Link</th>
                    </tr>
                  @foreach($events as $event)
                  <tr>
                    <td>{{$event->name}}</td>
                    <td>{{$event->fest->name}}</td>
                    <td><a href="{{url('/deregister/event/'.$event->fest->id.'/'.$event->id.'')}}" class="list-group-item">De-Register</a></td>
                  </tr>
                  @endforeach
                </table>
                </div>
              @endif

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
