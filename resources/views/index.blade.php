@extends('app')

@section('meta')

@endsection

@section('content')

<div class="main">

    <div class="back"></div>
    <div class="front"></div>
    <div class="overlay"></div>

    <div class="ind_main container-fluid">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1>FestManager</h1>
          <h4>All Fests in One Place!</h4>
          <a class="btn button glassbtn hash" href="#events">Explore</a>
        </div>
      </div>
    </div>

</div>

<div class="ind_events" id="events">

  <h1>Upcoming Fests</h1>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div id="owl-demo">
          @foreach($fests as $key => $fest)
          <div class="item">
            <div>
            <a href="{{url('/fest/'.$fest->id)}}">
              <img class="owlimg" src="{{url($fest->imgUrl)}}" alt="Owl Image">
            </a>
            <span class="ev_name">{{$fest->name}}</span>
            </div>
          </div>
          @endforeach
      </div>
    </div>
  </div>
</div>

</div>

<div class="ind_log" id="log">

  <div class="container-fluid">
    <div class="row">

      <div class="col-md-4 col-md-offset-4">
        <h1>Login</h1>

        @if(isset($errors))
          @include('errors.errorlist',['err'=>$errors])
        @endif

        {!! Form::open(['url'=>'auth/login#log']) !!}
          <div class="form-group">
              {!! Form::text('email', null, ['class' => 'form-control','placeholder'=>'Email','required'=>'']) !!}
          </div>
          <div class="form-group">
             <input class="form-control" placeholder="Password" type="password" name="password" required="">
          </div>
          <div class="form-group">
            {!! Form::submit('Login', ['class' => 'btn']) !!}
          </div>
          <div class="form-group">
            <a href="{{url('/register')}}" class="btn">Register</a>
          </div>

          @include('errors.errorlist',['err'=>$errors->cat])

        {!! Form::close() !!}

      </div>
    </div>
  </div>
</div>

<div class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-md-offset-2">

        <h3>FestManager</h3>
        <p>Credits</p>
        <ul>
          <li>Arun George<br>
            <a class="social" href="#">
            <img src="{{url('images/icons/facebook.png')}}" />
            </a>
            <a class="social" href="#">
            <img src="{{url('images/icons/twitter.png')}}" />
            </a>
          </li>
          <li>Joseph Mathew<br>
            <a class="social" href="#">
            <img src="{{url('images/icons/facebook.png')}}" />
            </a>
            <a class="social" href="#">
            <img src="{{url('images/icons/twitter.png')}}" />
            </a>
          </li>
        </ul>

      </div>

    </div>
  </div>
</div>


@endsection

@section('script')
{!! Html::script('js/owl.carousel.js') !!}
<script>
var front = document.querySelector('.front');
var back = document.querySelector('.back');
var backUrls = ["url('./images/holi.jpg')", "url('./images/kadhakali.jpg')", "url('./images/kid.jpg')"];
var frontUrls = ["url('./images/json.jpg')", "url('./images/toy.jpg')", "url('./images/kids.jpg')"];
var b = 0, f = 0;
var transition = function (isFadeIn) {
    var opacity = (isFadeIn) ? 1 : 0;
    dynamics.animate(front, {opacity: opacity}, {
        type: dynamics.easeIn,
        delay: 2000,
        duration: 3000,
        friction: 600,
        complete: function () {
            if (isFadeIn) {
                b = (b + 1) % backUrls.length;

                dynamics.css(back, {backgroundImage: backUrls[b]});
            } else {
                f = (f + 1) % frontUrls.length;
                dynamics.css(front, {backgroundImage: frontUrls[f]});
            }
            transition(!isFadeIn);
        }
    });
}
transition(false);

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
