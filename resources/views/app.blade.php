<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
		@yield('meta')
    <title>FestManager</title>
    {!! Html::style('css/styles.css') !!}
    {!! Html::script('js/jquery-1.11.3.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/dynamics.min.js') !!}
    {!! Html::script('js/dp.js') !!}

</head>

<body>


@yield('content')

@yield('script')


</body>
</html>
