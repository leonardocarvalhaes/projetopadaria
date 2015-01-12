@extends('padaria.layout')

@section('header')
@parent

	{{ HTML::style('css/jquery.dataTables.css') }}

@stop

@section('conteudo')
	
	<div class="page-header">
		<h1>Receitas</h1>
	</div>

	<div class="row-fluid">
		
		<div class="opcoes_superiores col-md-12">
			
			<a class="btn btn-success pull-right" href="{{ asset('receitas/nova') }}">Nova receita</a>

		</div>

	</div>

	<table id="example" class="table_datatable display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Modo de Preparo</th>
				<th>Ingredientes</th>
			</tr>
		</thead>

		<tfoot>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Modo de Preparo</th>
				<th>Ingredientes</th>
			</tr>
		</tfoot>

		<tbody>
			@foreach($receitas as $receita)
				<tr>
					<td>{{ $receita->id }}</td>
					<td>{{ $receita->nome }}</td>
					<td>{{ $receita->modoDePreparo }}</td>
					<td>{{ str_limit($receita->mostrarIngredientes(), 100) }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop