@extends('app')

@section('meta')

@endsection

@section('content')

@include('includes.nav')

<div class="user_fest">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">

        <h1>{{$fest->name}}</h1>


        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
              <img src="{{url($fest->imgUrl)}}" class="img-responsive"/>
            </div>
            <div class="col-md-9 details">
              <ul>
                <li>Department : {{$fest->department}}</li>
                <li>Date: {{$fest->fromDate->format('jS F, Y')}} to {{$fest->toDate->format('jS F, Y')}}</li>
              </ul>
              <h3>Events</h3>
              @if(sizeof($fest->events)==0)
                <p>No events are posted yet.</p>
              @endif
              <div class="list-group">
                @foreach($fest->events as $key => $value)
                  <a href="#" class="list-group-item">{{$value->name}}</a>
                @endforeach
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
