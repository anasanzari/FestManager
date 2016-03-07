<?php use Carbon\Carbon; ?>
@extends('app')

@section('meta')

@endsection

@section('content')

@include('includes.admin_nav')

<div class="container-fluid" style="min-height:600px;padding-top:150px;">
  <div class="row">
    <div class="col-md-6 col-md-offset-2">
      <h1>{{$dep->name}}</h1>
      <h2>Fests</h2>
      <table class="table table-hover">
        <tr>
          <th>Name</th>
          <th>From</th>
          <th>To</th>
        </tr>
        @foreach($fests as $fest)
         <tr>
           <td>{{$fest->name}}</td>
           <td>{{Carbon::parse($fest->fromDate)->toFormattedDateString()}}</td>
           <td>{{Carbon::parse($fest->toDate)->toFormattedDateString()}}</td>
         </tr>
        @endforeach
      </table>
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

});

</script>
@endsection
