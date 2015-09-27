<nav>
<div class="nav-wrapper black">
	<p>Plano Base - Painel de Controle</p>		
</nav>

<div class="container">
	<h4>Lista de Produtos</h4>
	<table  class="bordered " >
		<tr>
			<th>#</th>
			<th>Nome</th>
			<th>Tipo</th>
			<th>Tamanho</th>
			<th>Cor</th>
			<th>Imagem</th>
			<th>Preço</th>
			<th>Editar</th>
			<th>Excluir</th>
		</tr>
		<?php $indice = 0; 	?>
		<?php foreach ($lista_produtos as $produto) : ?>
				<tr>
					<td> <?php echo $indice =  ($indice + 1) ?> </td>
					<td> <?php echo $produto['nome'] ?></td>
					<td> <?php echo $produto['tipo'] ?></td>
					<td> <?php echo $produto['tamanho'] ?></td>
					<td> <?php echo $produto['cor'] ?></td>
					<td> <?php echo $produto['imagem'] ?></td>
					<td> <?php echo $produto['preco'] ?></td>
					<td> <a class="btn-floating btn-small" id="btnEditar"  ><i  class="material-icons">mode_edit</i></a></td>
					<td> <a class="btn-floating btn-small red" id="btnExcluir"  ?><i  class="material-icons">delete</i></a></td>					
				</tr>
		<?php endforeach; ?>
	</table>
   <div class="fixed-action-btn modal-trigger  " style="bottom: 45px; right: 24px;">
		<a class="btn-floating btn-large">
  			<i class="large material-icons" id="btnCadastrar">add</i>
		</a>
	</div>
	<!-- Modal Structure - Cadastrar Novo Produto -->
	<div id="cadastrarProduto" class="modal">
		<div class="modal-content">
		<h4>Cadastrar Produto</h4>
		<?php include "cadastrarProduto.php" ?>	
		</div>
	</div>
	<!-- Modal Structure - Editar Produto -->
	<div id="editarProduto" class="modal">
		<div class="modal-content">
			<?php include "editarProduto.php" ?>	
		</div>
	</div>
	<!-- Modal Structure - Excluir Produto -->
	<div id="excluirProduto" class="modal">
		<div class="modal-content">
			<?php include "excluirProduto.php" ?>	
		</div>
	</div>
</div>