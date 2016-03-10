@extends('app')

@section('meta')

@endsection

@section('content')

@include('includes.admin_nav')

<div class="container-fluid" style="min-height:600px;padding-top:70px;">
  <div class="row">
    <div class="col-md-6 col-md-offset-2">
      <h3>Edit Fest</h3>
      {!! Form::open(['url'=>'/department/editfest/'.$fest->id.'','files' => 'true']) !!}
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" name="name" value="{{$fest->name}}" required="">
        </div>
        <div class="form-group">
          <label>From Date</label>
           <input class="form-control datepicker" type="date" name="fromDate" value="{{$fest->fromDate->toDateString()}}" required="">
        </div>
        <div class="form-group">
          <label>To Date</label>
           <input class="form-control datepicker"  type="date" name="toDate" value="{{$fest->toDate->toDateString()}}" required="">
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

$('.datepicker').datepicker({
  format: 'yyyy-mm-dd',
  startDate: '-3d'
});

</script>
@endsection
