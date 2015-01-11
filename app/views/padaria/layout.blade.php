<html>
<head>
	
	<title>{{ $titulo }}</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	{{ HTML::style('css/bootstrap3.3.1/css/bootstrap.min.css') }}
	{{ HTML::style('css/bootstrap3.3.1/css/bootstrap-theme.min.css') }}
	{{ HTML::style('css/estilo.css') }}

</head>
<body>

	@include('padaria.menu')

	@yield('conteudo')

	{{ HTML::script('js/jquery/jquery-1.11.2.js') }}
	{{ HTML::script('js/bootstrap3.3.1/bootstrap.min.js') }}

</body>
</html>