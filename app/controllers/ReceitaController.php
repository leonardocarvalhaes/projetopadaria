<?php

class ReceitaController extends BaseController {
	public function getIndex() {

		$titulo = 'Receitas';

		$receitas = Receita::all();

		return View::make('padaria.receitas.listar_receitas')->with('titulo', $titulo)
															->with('receitas', $receitas);
	}

	public function getNova() {

		$titulo = 'Cadastrar receita';

		$ingredientes = Ingrediente::all();

		$ingredientesArray = array();

		foreach($ingredientes as $ingrediente) {

			$quantidade = $ingrediente->quantidadeUnitaria . $ingrediente->unidadeDeMedida;
			$ingredientesArray[$ingrediente->id] = $ingrediente->nome . ' (' . $quantidade . ')';

		}


		return View::make('padaria.receitas.cadastrar_receita')->with('titulo', $titulo)
																->with('ingredientes', $ingredientesArray);
	}

	public function postNova() {

		$titulo = 'Receitas';

		$receita = new Receita;
		$receita->nome = Input::get('nome');
		$receita->modoDePreparo = Input::get('modo_preparo');
		$receita->save();

		$quantidades = Input::get('quantidades');
		foreach(Input::get('ingredientes') as $indice=>$ingredienteId) {

			$receitaItem = new ReceitaItem;
			$receitaItem->quantidade = $quantidades[$indice];
			$receitaItem->receita_id = $receita->id;
			$receitaItem->ingrediente_id = $ingredienteId;
			$receitaItem->save();

		}


		return Redirect::to('receitas')->with('titulo', $titulo);
	}
}