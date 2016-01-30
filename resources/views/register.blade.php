@extends('app')

@section('meta')

@endsection

@section('content')

<div class="ind_log" id="log">

  <div class="container-fluid">
    <div class="row">

      <div class="col-md-4 col-md-offset-4">
        <h1>Register</h1>

        @if(isset($errors))
          @include('errors.errorlist',['err'=>$errors])
        @endif

        {!! Form::open(['url'=>'auth/register']) !!}
          <div class="form-group">
              {!! Form::text('name', $input['name'], ['class' => 'form-control','placeholder'=>'Name','required'=>'']) !!}
          </div>
          <div class="form-group">
              {!! Form::text('college', $input['college'], ['class' => 'form-control','placeholder'=>'College','required'=>'']) !!}
          </div>
          <div class="form-group">
              {!! Form::text('phone', $input['phone'], ['class' => 'form-control','placeholder'=>'Phone','required'=>'']) !!}
          </div>
          <div class="form-group">
              {!! Form::text('email', $input['email'], ['class' => 'form-control','placeholder'=>'Email','required'=>'']) !!}
          </div>
          <div class="form-group">
             <input class="form-control" placeholder="Password" type="password" name="password" required="">
          </div>
          <div class="form-group">
            {!! Form::submit('Register', ['class' => 'btn']) !!}
          </div>

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
        <p>© 2015 FestManager.</p>

      </div>

    </div>
  </div>
</div>


@endsection

@section('script')
{!! Html::script('js/owl.carousel.js') !!}
<script>


</script>
@endsection
