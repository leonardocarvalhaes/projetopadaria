<?php

class Ingrediente extends Eloquent {

	public function receitasitens() {

		return $this->hasMany('ReceitaItem');

	}

}