



@extends('app')

@section('meta')

@endsection

@section('content')

@include('includes.admin_nav')

<div class="container-fluid" style="min-height:600px;padding-top:70px;">
  <div class="row">
    <div class="col-md-6 col-md-offset-2">
      <h2>Add Event</h2>
      {!! Form::open(['url'=>'/department/showfest/'.$fest->id.'/newevent','files' => 'true']) !!}
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Name" name="name" required="">
        </div>
        <div class="form-group">
            <label>Event Details</label>
           <textarea class="form-control" rows="15" id="text" name="details" required=""></textarea>
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
{!! Html::script('js/markitup/jquery.markitup.js') !!}
{!! Html::script('js/markitup/settings.js') !!}
<script>
  $('#text').markItUp(mySettings);
</script>
@endsection
