<?php

class ReceitaItem extends Eloquent {

	protected $table = 'receitasitens';

	public function ingrediente() {

		return $this->belongsTo('Ingrediente');

	}

}