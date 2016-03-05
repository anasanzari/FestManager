@extends('app')

@section('meta')

@endsection

@section('content')

@include('includes.admin_nav')

<div class="container-fluid" style="min-height:600px;padding-top:70px;">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <div class="preview">
      <h1>{{$event->name}}</h1>
      {!! $event->details !!}
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

@endsection
