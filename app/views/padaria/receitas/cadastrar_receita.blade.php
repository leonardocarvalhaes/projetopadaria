@extends('padaria.layout')

@section('header')
@parent

	{{ HTML::style('css/jquery.dataTables.css') }}

@stop

@section('conteudo')
	
	<div class="page-header">
		<h1>Cadastrar Receita</h1>
	</div>

	{{ Form::open() }}

		<div class="row">
			
			<div class="col-md-12">

				{{ Form::text('nome', Input::old('nome'), array('class'=>'form-control', 'Placeholder'=>'*Nome')) }}

			</div>


		</div>

		<div class="row">
			
			<div class="col-md-12">

				{{ Form::textarea('modo_preparo', Input::old('modo_preparo'), array('class'=>'form-control', 'Placeholder'=>'Modo de preparo')) }}

			</div>


		</div>

		<div class="row">
			
			<div class="col-md-4">

				{{ Form::select('ingredientes_cadastrados', array('1'=>'Coco ralado', '2'=>'Ovo de galinha'), Input::old('ingredientes_cadastrados'), array('class'=>'form-control', 'Placeholder'=>'Ingredientes cadastrados', 'multiple'=>true)) }}

			</div>

		</div>

		<div class="row">
			
			<div class="pull-right">

<!-- 				{{ Form::button('Cancelar', array('class'=>'btn btn-success form-control', 'Placeholder'=>'Ingredientes cadastrados', 'value'=>'Cadastrar')) }}
 -->				{{ Form::submit('Cadastrar', array('class'=>'btn btn-success form-control', 'Placeholder'=>'Ingredientes cadastrados', 'value'=>'Cadastrar')) }}

			</div>

		</div>

	{{ Form::close() }}
	
@stop