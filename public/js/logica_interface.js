$(document).ready(function(){

	$('.table_datatable').dataTable();

	$('.adicionar_ingrediente').click(function(){

		$('.ingredientes_cadastrados option:selected').each(function(){
			
			var label = '<label class="ingrediente_id" for="'+$(this).val()+'">'+$(this).text()+'</label>';
			var inputQuantidade = '<input class="ingrediente_quantidade form-control" name="quantidades[]" placeholder="Quantidade" type="text" id="'+$(this).val()+'"/>';
			var inputIngrediente = '<input name="ingredientes[]" type="hidden" value="'+$(this).val()+'"/>';
			var remover = '<a class="remover_ingrediente btn btn-danger center-block" title="Remover ingrediente"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>';
			
			var colLabel = '<div class="col-md-4 text-right">'+label+'</div>';
			var colInput = '<div class="col-md-6">'+inputQuantidade+inputIngrediente+'</div>';
			var colRemover = '<div class="col-md-2">'+remover+'</div>';

			var row = '<div class="row">'+colLabel+colInput+colRemover+'</div>';

			$('.ingredientes_receita').append(row);

			$(this).remove();

		});

	});


	$('body').on('click', '.remover_ingrediente', function(){

		var row = $(this).parent().parent();
		var ingredienteId = row.find('.ingrediente_id').attr('for');
		var ingredienteNome = row.find('.ingrediente_id').text();

		var option = '<option value="'+ingredienteId+'">'+ingredienteNome+'</option>';

		$('.ingredientes_cadastrados').append(option);

		row.remove();

	});

	$("#cadastro_receita").validate({

		messages: {
			nome: 'O nome precisa ser preenchido.',
			modo_preparo: 'O modo de preeparo precisa ser preenchido.'
		},

		rules: {
			nome: 'required',
			modo_preparo: 'required'
		},
	
		submitHandler: function(form) {

			var submeter = true;

			if($('.ingrediente_quantidade').length == 0) {
				
				$('<label class="error">Ao menos um ingrediente precisa ser adicionado.</label>').insertAfter('.ingredientes_cadastrados');
			
				submeter = false;

			} else {

				$('.ingrediente_quantidade').each(function() {

					if($(this).val() == '' || $(this).val() == 0) {

						$('<label class="error">A quantidade precisa ser preenchida.</label>').insertAfter(this);

						submeter = false;

					} else if(!eUmNumero($(this).val())) {

						$('<label class="error">A quantidade só pode ser um número.</label>').insertAfter(this);

						submeter = false;

					}

				});



			}

			if(submeter) {
				form.submit();
			}

		}

	});

});

function eUmNumero(valor) {
	
	var regra = /^-?\d*\.?\d+$/;
	
	if(valor.match(regra)) {

		return true;

	} else {

		return false;

	}

}