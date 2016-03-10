



@extends('app')

@section('meta')

@endsection

@section('content')

@include('includes.admin_nav')

<div class="container-fluid" style="min-height:600px;padding-top:150px;">
  <div class="row">
    <div class="col-md-6 col-md-offset-2">
      {!! Form::open(['url'=>'/department/newfest','files' => 'true']) !!}
      <h3>Add Fest</h3>
        <div class="form-group">
          <label>Name</label>
            <input class="form-control" type="text"  name="name" required="">
        </div>
        <div class="form-group">
          <label>From Date</label>
           <input class="form-control datepicker" type="date" name="fromDate" required="">
        </div>
        <div class="form-group">
          <label>To Date</label>
           <input class="form-control datepicker" type="date" name="toDate" required="">
        </div>
        <div class="form-group">
          <label>Upload Event Photo</label>
           <input placeholder="Image" type="file" name="photo" required="">
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
