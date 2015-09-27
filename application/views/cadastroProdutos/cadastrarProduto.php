<!--Modal de cadastrar dos produtos-->
<div class="row col s12">
	<form action="cadastroprodutos" method="post">
		<?php include "detalhesProduto.php"; ?>	 						  
		<div class="modal-footer">
			<button id="gravarProduto" class="btn waves-effect waves-light " type="submit" name="action">
				Cadastrar<i class="material-icons right">done_all</i>
			</button>
		</div>
	</form>
</div>