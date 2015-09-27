<nav>
<div class="nav-wrapper black">
	<p>Lista de produtos</p>		
</nav>

<div class="container">
	<table  class="striped " >
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
					<td> <a href=<?php echo "#"  ?> ></a><i class="material-icons">mode_edit</i></td>
					<td> <a href=<?php echo "#"  ?> ></a><i class="material-icons">delete</i></td>					
				</tr>
		<?php endforeach; ?>
	</table>
   <div class="fixed-action-btn modal-trigger  " style="bottom: 45px; right: 24px;">
		<a class="btn-floating btn-large">
  			<i class="large material-icons" id="modalBtn">add</i>
		</a>
	</div>
	<!-- Modal Structure -->
	<div id="editarProduto" class="modal">
		<div class="modal-content">
		<h4>Cadastrar Produto</h4>
			<div class="row col s12">
				<form action="cadastroprodutos" method="post">
			     	<div class="row col s12">
			        	<div class="input-field  col s9">
			          	<input id="nome" type="text" name="nome" >
			          	<label for="nome">Nome do Produto</label>
			        	</div>
						<div class="input-field  col s3">
							<input id="preco" type="text" name="numbers" pattern="[0-9][.-,]+$" />
			      			<label for="preco">Preço</label>
						  </div>
					  </div>
				  	<div class="row col s12">
						<div class="col s6 ">
							<label>Tipo do produto</label>
							<select class="browser-default" name="tipo"> 
						 		<option value="0" disabled selected>Selecione</option>
				      			<?php foreach ($lista_tipos as $tipo) : ?>
									<option value= <?php echo $tipo->idTipo; ?> > <?php  echo $tipo->nome; ?></option>
			      				<?php endforeach; ?>								  
				    	    </select>				    		
						</div>
						<div class="col s3 ">
							<label>Tamanho</label>
							<select class="browser-default" name="tamanho">
  								<option value="0" disabled selected>Selecione</option>
								<?php foreach ($lista_tamanhos as $tamanho) : ?>
									<option value= <?php echo $tamanho->idTamanho; ?> > <?php  echo $tamanho->nome; ?></option>
			      				<?php endforeach; ?>
		    	    		</select>							
				    	</div>
						<div class="col s3 ">
							<label>Cor</label>
							<select class="browser-default" name="cor">
  								<option value="0" disabled selected>Selecione</option>
								<?php foreach ($lista_cores as $cor) : ?>
									<option value= <?php echo $cor->idCor; ?> > <?php  echo $cor->nome; ?></option>
			      				<?php endforeach; ?>
		    	    		</select>							
				    	</div>						
						<div class="col s12 ">
							<div class="file-field input-field ">
						      <div class="btn col s2">
						        <span>File</span>
						        <input type="file" >
						      </div>
						      <div class="file-path-wrapper col s9">
						        <input class="file-path validate" type="text" placeholder="selecione uma imagem">
							  </div>
							  <i class="material-icons col s1 medium">zoom_in</i>
							 </div>
						</div>
					</div>				  
			   		<div class="modal-footer">
						<button id="gravarProduto" class="btn waves-effect waves-light " type="submit" name="action">
			 			Gravar<i class="material-icons right">done_all</i>
			 		</button>
				</div>
			   	</form>
		  </div>
		</div>
		
	</div>
</div>