@extends('app')

@section('meta')

@endsection

@section('content')

@include('user.nav')

<div class="user_fest">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">

        <h1>Rave Fest</h1>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-5">
              <img src="{{url('images/fests/1.jpg')}}" class="img-responsive"/>
            </div>
            <div class="col-md-7">
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
