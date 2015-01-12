@extends('padaria.layout')

@section('header')
@parent

	{{ HTML::style('css/jquery.dataTables.css') }}

@stop

@section('conteudo')
	
	<div class="page-header">
		<h1>Cadastrar Receita</h1>
	</div>

	{{ Form::open(array('id'=>'cadastro_receita')) }}

		<div class="row">
			
			<div class="col-md-6">

				<p>{{ Form::text('nome', Input::old('nome'), array('class'=>'form-control', 'Placeholder'=>'*Nome')) }}</p>

				<p>{{ Form::textarea('modo_preparo', Input::old('modo_preparo'), array('class'=>'form-control', 'Placeholder'=>'Modo de preparo')) }}</p>

			</div>

			<div class="col-md-6">

				{{ HTML::image('img/bolo_chocolate.jpg', null, array('class'=>'center-block img-rounded')) }}

			</div>

		</div>

		<div class="row">
			
			<div class="row">
				
				<div class="col-md-6">

					<h3>Selecione os ingredientes</h3>

				</div>

				<div class="col-md-6">

					<h3 class="pull-right">Ingredientes da receita</h3>

				</div>

			</div>

			<div class="row">

				<div class="col-md-5">

					{{ Form::select('ingredientes_cadastrados', $ingredientes, Input::old('ingredientes'), array('class'=>'ingredientes_cadastrados form-control', 'id'=>'ingredientes_cadastrados', 'Placeholder'=>'Ingredientes cadastrados', 'multiple'=>true, 'style'=>'height:150px;')) }}

				</div>

				<div class="col-md-1">

					<a class="adicionar_ingrediente btn btn-success center-block"  title="Adicionar ingredientes">

						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

					</a>

				</div>

				<div class="col-md-6 ingredientes_receita"></div>

			</div>

		</div>

		<div class="row">
			
			<div class="pull-right">

				<div class="row">
				
					<div class="col-md-6">

						{{ Form::submit('Cadastrar', array('class'=>'btn btn-success form-control', 'Placeholder'=>'Ingredientes cadastrados', 'value'=>'Cadastrar')) }}

					</div>

					<div class="col-md-6">

						{{ HTML::link('receitas', 'Cancelar', array('class'=>'btn btn-default')) }}

					</div>

				</div>

			</div>

		</div>

	{{ Form::close() }}
	
@stop