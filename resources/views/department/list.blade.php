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
              <h3>Other Events</h3>
              <div class="list-group">
                @foreach($fest->events as $even)
                  @if($even->id != $event->id)
                  <a href="{{url('/department/showfest/listeventreg/'.$even->id.'')}}" class="list-group-item">{{$even->name}}</a>
                  @endif
                @endforeach
              </div>
            </div>
            <div class="col-md-9 details">
              <h3>{{$event->name}}</h3>
              <table class="table table-striped">
                <tr>
                  <th>Name</th>
                  <th>College</th>
                  <th>Email</th>
                  <th>Phone</th>
                </tr>
                @foreach($list as $list)
                <tr>
                  <td>{{$list->user->name}}</td>
                  <td>{{$list->user->college}}</td>
                  <td>{{$list->user->email}}</td>
                  <td>{{$list->user->phone}}</td>
                </tr>
                @endforeach
              </table>
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
