@extends('padaria.layout')

@section('conteudo')
	
	<div class='row'>.</div>

	<h2 class="text-center">{{ $mensagem }}</h2>
	
	{{ HTML::link($urlDestino, 'Confirmar', array('class'=>'btn btn-warning pull-right')) }}

@stop