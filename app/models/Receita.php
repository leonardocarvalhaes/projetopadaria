<?php

class Receita extends Eloquent {

	public function receitaitens() {

		return $this->hasMany('ReceitaItem');

	}

	public function mostrarIngredientes() {

		$nomes = array();

		foreach($this->receitaitens as $receitaItem) {

			array_push($nomes, $receitaItem->ingrediente->nome);

		}

		return implode(', ', $nomes);

	}

}