



@extends('app')

@section('meta')

@endsection

@section('content')

@include('includes.admin_nav')

<div class="container-fluid" style="min-height:600px;padding-top:150px;">
  <div class="row">
    <div class="col-md-6 col-md-offset-2">
      {!! Form::open(['url'=>'/admin/newdep','files' => 'true']) !!}
      <div class="form-group">
          <label>Name</label>
          <input class="form-control" type="text" name="name" required="">
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input class="form-control" type="text" name="phone" required="">
      </div>
      <div class="form-group">
          <label>Email</label>
          <input class="form-control" type="email" name="email" required="">
      </div>
      <div class="form-group">
         <label>Password</label>
         <input class="form-control" type="password" name="password" required="">
      </div>
        <div class="form-group">
          {!! Form::submit('Confirm', ['class' => 'btn']) !!}
        </div>

        @include('errors.errorlist',['err'=>$errors->cat])

      {!! Form::close() !!}
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
