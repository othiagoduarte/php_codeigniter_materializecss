<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Plano Base</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	
	<!-- JS  -->
	
	  <!--  Scripts-->
	  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	  <script src="js/materialize.js"></script>
	  <script src="js/init.js"></script>
	  <script src="js/site.js"></script>
	  <script src="js/produtos.js"></script>		
	  
  </head>

  <body>
			
    <nav>
  	<div class="nav-wrapper black">
    	<p>Lista de produtos</p>		
   	</nav>
    
	<div class="container">
	   
		<table  class="centered" >
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
			<?php $indice = 0; 
			//Temporário - Ira polular a lista com os produtos
				
			$lista_produtos = array();
			$produtotemp = array();	
			$produtotemp['nome'] = 'camisa básica';
			$produtotemp['tipo'] = 'CAMISAS';
			$produtotemp['tamanho'] = 'G';
			$produtotemp['cor'] = 'AZUL';
			$produtotemp['preco'] = '29,99';
			$produtotemp['imagem'] = 'imagem';
					
			$lista_produtos[] = $produtotemp;
			
			$produtotemp = array();	
			$produtotemp['nome'] = 'camisa básica';
			$produtotemp['tipo'] = 'CAMISAS';
			$produtotemp['tamanho'] = 'M';
			$produtotemp['cor'] = 'VERMELHO';
			$produtotemp['preco'] = '29,99';
			$produtotemp['imagem'] = 'imagem';
					
			$lista_produtos[] = $produtotemp;
			
			$produtotemp = array();	
			$produtotemp['nome'] = 'camisa básica';
			$produtotemp['tipo'] = 'CAMISAS';
			$produtotemp['tamanho'] = 'P';
			$produtotemp['cor'] = 'VERDE';
			$produtotemp['preco'] = '29,99';
			$produtotemp['imagem'] = 'imagem';
					
			$lista_produtos[] = $produtotemp;
			
			$produtotemp = array();	
			$produtotemp['nome'] = 'camisa básica';
			$produtotemp['tipo'] = 'CAMISAS';
			$produtotemp['tamanho'] = 'PP';
			$produtotemp['cor'] = 'ROSA';
			$produtotemp['preco'] = '29,99';
			$produtotemp['imagem'] = 'imagem';
					
			$lista_produtos[] = $produtotemp;
			
			
			$produtotemp = array();	
			$produtotemp['nome'] = 'camisa básica';
			$produtotemp['tipo'] = 'CAMISAS';
			$produtotemp['tamanho'] = 'PP';
			$produtotemp['cor'] = 'ROSA';
			$produtotemp['preco'] = '29,99';
			$produtotemp['imagem'] = 'imagem';
					
			$lista_produtos[] = $produtotemp;
			
			$produtotemp = array();	
			$produtotemp['nome'] = 'camisa básica';
			$produtotemp['tipo'] = 'CAMISAS';
			$produtotemp['tamanho'] = 'PP';
			$produtotemp['cor'] = 'ROSA';
			$produtotemp['preco'] = '29,99';
			$produtotemp['imagem'] = 'imagem';
					
			$lista_produtos[] = $produtotemp;
			
			$produtotemp = array();	
			$produtotemp['nome'] = 'camisa básica';
			$produtotemp['tipo'] = 'CAMISAS';
			$produtotemp['tamanho'] = 'PP';
			$produtotemp['cor'] = 'ROSA';
			$produtotemp['preco'] = '29,99';
			$produtotemp['imagem'] = 'imagem';
					
			$lista_produtos[] = $produtotemp;
			$produtotemp = array();	
			$produtotemp['nome'] = 'camisa básica';
			$produtotemp['tipo'] = 'CAMISAS';
			$produtotemp['tamanho'] = 'PP';
			$produtotemp['cor'] = 'ROSA';
			$produtotemp['preco'] = '29,99';
			$produtotemp['imagem'] = 'imagem';
					
			$lista_produtos[] = $produtotemp;
			$produtotemp = array();	
			$produtotemp['nome'] = 'camisa básica';
			$produtotemp['tipo'] = 'CAMISAS';
			$produtotemp['tamanho'] = 'PP';
			$produtotemp['cor'] = 'ROSA';
			$produtotemp['preco'] = '29,99';
			$produtotemp['imagem'] = 'imagem';
					
			$lista_produtos[] = $produtotemp;
			$produtotemp = array();	
			$produtotemp['nome'] = 'camisa básica';
			$produtotemp['tipo'] = 'CAMISAS';
			$produtotemp['tamanho'] = 'PP';
			$produtotemp['cor'] = 'ROSA';
			$produtotemp['preco'] = '29,99';
			$produtotemp['imagem'] = 'imagem';
					
			$lista_produtos[] = $produtotemp;
			$produtotemp = array();	
			$produtotemp['nome'] = 'camisa básica';
			$produtotemp['tipo'] = 'CAMISAS';
			$produtotemp['tamanho'] = 'PP';
			$produtotemp['cor'] = 'ROSA';
			$produtotemp['preco'] = '29,99';
			$produtotemp['imagem'] = 'imagem';
					
			$lista_produtos[] = $produtotemp;
			$produtotemp = array();	
			$produtotemp['nome'] = 'camisa básica';
			$produtotemp['tipo'] = 'CAMISAS';
			$produtotemp['tamanho'] = 'PP';
			$produtotemp['cor'] = 'ROSA';
			$produtotemp['preco'] = '29,99';
			$produtotemp['imagem'] = 'imagem';
					
			$lista_produtos[] = $produtotemp;
			$produtotemp = array();	
			$produtotemp['nome'] = 'camisa básica';
			$produtotemp['tipo'] = 'CAMISAS';
			$produtotemp['tamanho'] = 'PP';
			$produtotemp['cor'] = 'ROSA';
			$produtotemp['preco'] = '29,99';
			$produtotemp['imagem'] = 'imagem';
					
			$lista_produtos[] = $produtotemp;
					
			?>
			<?php foreach ($lista_produtos as $produto) : ?>
					<tr>
						<td> <?php echo $indice =  ($indice + 1) ?> </td>
						<td> <?php echo $produto['nome'] ?></td>
						<td> <?php echo $produto['tipo'] ?></td>
						<td> <?php echo $produto['tamanho'] ?></td>
						<td> <?php echo $produto['cor'] ?></td>
						<td> <?php echo $produto['imagem'] ?></td>
						<td> <?php echo $produto['preco'] ?></td>
						<td> <a href=<?php echo "#"  ?> ><i class="material-icons">mode_edit</i></a></td>
						<td> <a href=<?php echo "#"  ?> ><i class="material-icons">delete</i></a> </td>
						
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
					<form ">
				     	<div class="row col s12">
				        	<div class="input-field ">
				          	<input id="nome" type="text" >
				          	<label for="nome">Nome do Produto</label>
				        	</div>
				      	</div>
					  	<div class="row col s12">
							<div class="col s6 ">
								<label>Tipo do produto</label>
								<select class="browser-default"> 
							 		<option value="0" disabled selected>Selecione</option>
					      			<option value="1">Camisa básica</option>
					      			<option value="2">Camisa Polo</option>
					      			<option value="3">Camisa Regata</option>
					    	    </select>	
					    		
							</div>
							<div class="col s6 ">
								<label>Tamanho</label>
								<select class="browser-default">
	  								<option value="0" disabled selected>Selecione</option>
					      			<option value="1">PP</option>
					      			<option value="2">M</option>
					      			<option value="3">G</option>
									<option value="4">GG</option>
					    	    </select>	
								
								
								
					    	</div>
							<div class="col s12 ">
								<div class="file-field input-field">
							      <div class="btn">
							        <span>File</span>
							        <input type="file" multiple>
							      </div>
							      <div class="file-path-wrapper">
							        <input class="file-path validate" type="text" placeholder="Upload one or more files">
							      </div>
							    </div>
							</div>
						</div>				  
  				   	</form>
			  </div>
			</div>
			<div class="modal-footer">
				<button class="btn waves-effect waves-light " type="submit" name="action">
				 	Gravar<i class="material-icons right">done_all</i>
  				</button>
			</div>
		</div>

	</div>   
 
  </body>

</html>