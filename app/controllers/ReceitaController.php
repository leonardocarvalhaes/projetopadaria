<?php

class ReceitaController extends BaseController {
	public function getIndex() {
		$titulo = 'Receitas';

		return View::make('padaria.receitas.listar_receitas')->with('titulo', $titulo);
	}

	public function getNova() {
		$titulo = 'Cadastrar receita';

		return View::make('padaria.receitas.cadastrar_receita')->with('titulo', $titulo);
	}
}