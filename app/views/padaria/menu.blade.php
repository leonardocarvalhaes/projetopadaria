<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		
		<div class="navbar-header">
			<a class="navbar-brand" href="{{ asset('') }}">Padaria Pão de Trigo</a>
		</div>
		
		<div id="navbar" class="collapse navbar-collapse">
			
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Página inicial</a></li>
				
				<li class="dropdown">
					<a href="#about" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Receitas <span class="caret"></span></a>

					<ul class="dropdown-menu" role="menu">
						<li><a href="{{ asset('/receitas') }}">Listar receitas</a></li>
						<li><a href="#">Listar ingredientes</a></li>
					</ul>
				</li>

				<li><a href="#contact">Pedidos</a></li>
				<li><a href="#contact">Vendas</a></li>
				<li><a href="#contact">Produtos</a></li>
				<li><a href="#contact">Estoque</a></li>
			</ul>

			<ul class="nav navbar-nav pull-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Fulano de Tal (Padeiro) <span class="caret"></span></a>
					
					<ul class="dropdown-menu dropdown-menu-right" role="menu">
						<li><a href="#">Bloquear tela</a></li>
						<li><a href="#">Configurações</a></li>
						<li class="divider"></li>
						<li><a href="#">Sair</a></li>
					</ul>
				</li>
			</ul>

		</div>

	</div>
</nav>