@extends('app')

@section('meta')

@endsection

@section('content')

<div class="ind_log" id="log">

  <div class="container-fluid">
    <div class="row">

      <div class="col-md-4 col-md-offset-4">

        <h1>Sorry! The page you are looking for is not here.</h1>

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
