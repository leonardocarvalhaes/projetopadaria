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
				<th>Name</th>
				<th>Position</th>
				<th>Office</th>
				<th>Age</th>
				<th>Start date</th>
				<th>Salary</th>
			</tr>
		</thead>

		<tfoot>
			<tr>
				<th>Name</th>
				<th>Position</th>
				<th>Office</th>
				<th>Age</th>
				<th>Start date</th>
				<th>Salary</th>
			</tr>
		</tfoot>

		<tbody>
			<tr>
				<td>Tiger Nixon</td>
				<td>System Architect</td>
				<td>Edinburgh</td>
				<td>61</td>
				<td>2011/04/25</td>
				<td>$320,800</td>
			</tr>
		</tbody>
	</table>
@stop