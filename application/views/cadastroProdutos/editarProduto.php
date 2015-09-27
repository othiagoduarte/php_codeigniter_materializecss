<!--Conteúdo da modal de edição dos produtos-->
<?php 
	$detalhesProduto = array();
	
	$detalhesProduto['nome'] = 'Camisa';
	$detalhesProduto['preco'] = '29,99';
	$detalhesProduto['tamanho'] = '2';
	$detalhesProduto['cor'] = '2';
	$detalhesProduto['tipo'] = '2';
?>
<h4>Edidar produto</h4>
<div class="row col s12">
	<form action="cadastroprodutos" method="post">
		<?php include "detalhesProduto.php" ?>	 						  
		<div class="modal-footer">
			<button id="gravarProduto" class="btn waves-effect waves-light " type="submit" name="action">
				Editar<i class="material-icons right">done_all</i>
			</button>
		</div>
	</form>
</div>