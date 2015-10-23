<!--Conteúdo da modal de exclusão dos produtos-->
<?php 
	$detalhesProduto = array();
	$detalhesProduto['nome'] = 'Camisa';
	$detalhesProduto['preco'] = '29,99';
	$detalhesProduto['tamanho'] = '1';
	$detalhesProduto['cor'] = '1';
	$detalhesProduto['tipo'] = '1';
?>
<h4>Excluir produto</h4>
<div class="row col s12">
	<form action="cadastroprodutos/excluir" method="post">
		<?php include "detalhesProduto.php" ?>	 						  
		<div class="modal-footer">
			<button id="excluirProduto" class="btn waves-effect waves-light red " type="submit">
				excluir<i class="material-icons right">delete</i>
			</button>
		</div>
	</form>
</div>