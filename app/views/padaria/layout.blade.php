<!DOCTYPE html>

<html>

@section('header')
	
	<title>{{ $titulo }}</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	{{ HTML::style('css/bootstrap3.3.1/css/bootstrap.min.css') }}
	{{ HTML::style('css/bootstrap3.3.1/css/bootstrap-theme.min.css') }}
	{{ HTML::style('css/estilo.css') }}

@show

@section('body')

	@include('padaria.menu')

	<div class="container">

		<div class="row-fluid"><div class="col-md-12">.</div></div>

		<div class="row-fluid">

			<div class="col-md-12">

				@yield('conteudo')

			</div>

		</div>

	</div>

	{{ HTML::script('js/jquery/jquery-1.11.2.js') }}
	{{ HTML::script('js/bootstrap3.3.1/bootstrap.min.js') }}
	{{ HTML::script('js/jquery.dataTables.min.js') }}
	{{ HTML::script('js/jquery.validate/dist/jquery.validate.min.js') }}
	{{ HTML::script('js/logica_interface.js') }}

@show

</html>