@extends('app')

@section('meta')

@endsection

@section('content')

@include('includes.admin_nav')

<div class="container-fluid" style="min-height:600px;padding-top:150px;">
  <div class="row">
    <div class="col-md-6 col-md-offset-2">
      <h1>Welcome</h1>
      <h2>Departments</h2>
      <table class="table table-hover">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Link</th>
        </tr>
        @foreach($deps as $dep)
         <tr>
           <td>{{$dep->name}}</td>
           <td>{{$dep->email}}</td>
           <td>{{$dep->phone}}</td>
           <td><a href="{{url('/admin/showdep/'.$dep->id)}}" class="btn">View Details</a>
           <a href="{{url('/admin/deletedep/'.$dep->id)}}" class="btn">Delete</a></td>
         </tr>
        @endforeach
      </table>
      <a href="{{url('/admin/newdep')}}" class="btn">Add a Department</a>
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
