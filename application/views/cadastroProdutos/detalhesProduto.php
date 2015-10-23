<?php 
	if( ! isset($detalhesProduto['nome'])) {
	
		$detalhesProduto = array();
		$detalhesProduto['id'] = '';
		$detalhesProduto['nome'] = '';	
		$detalhesProduto['preco'] = '';
		$detalhesProduto['tamanho'] = '0';
		$detalhesProduto['cor'] = '0';
		$detalhesProduto['tipo'] = '0';	
	}	
?>
<div class="row col s12">
	<div class="input-field  col s9">
		<input id="id" type="hidden" name="id" value = <?php echo $detalhesProduto['id']  ?>>
		<input id="nome" type="text" name="nome" value = <?php echo $detalhesProduto['nome']  ?>>
		<label for="nome">Nome do Produto</label>
	</div>
	<div class="input-field  col s3">
		<input id="preco" type="text" name="preco" pattern="[0-9][.-,]+$" value = <?php echo $detalhesProduto['preco'] ?>>
		<label for="preco">Preço</label>
	</div>
</div>
<div class="row col s12">
	<div class="col s6 ">
		<label>Tipo do produto</label>
		<select class="browser-default" name="idtipo"> 
			<option value="0" disabled selected>Selecione</option>
			<?php foreach ($lista_tipos as $tipo) : ?>
				<option value=
				<?php 
					echo $tipo->idTipo; 
					echo $tipo->idTipo == $detalhesProduto['tipo'] ?  "  selected" :  "" ; 
				?> > 
				<?php  echo $tipo->nome; ?></option>
			<?php endforeach; ?>								  
		</select>				    		
	</div>
	<div class="col s3 ">
		<label>Tamanho</label>
		<select class="browser-default" name="idtamanho">
			<option value="0" disabled  selected >Selecione</option>
			<?php foreach ($lista_tamanhos as $tamanho) : ?>
				<option value= 
				<?php 
					echo $tamanho->idTamanho; 
				 	echo $tamanho->idTamanho == $detalhesProduto['tamanho'] ?  "  selected" :  "" ;
				?> > <?php  echo $tamanho->nome; ?></option>
			<?php endforeach; ?>
		</select>							
	</div>
	<div class="col s3 ">
		<label>Cor</label>
		<select class="browser-default" name="idcor">
			<option value="0" disabled selected >Selecione</option>
				<?php foreach ($lista_cores as $cor) : ?>
					<option value= 
					<?php 
						echo $cor->idCor;
						echo $cor->idCor == $detalhesProduto['cor'] ?  "  selected " :  "" ;
					?> > <?php echo $cor->nome;?>
					</option>
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
					<input class="file-path validate" type="text" placeholder="selecione uma imagem" name="imagem">
			</div>
			<i class="material-icons col s1 medium">zoom_in</i>
		</div>
	</div>
</div>
<?php 
	$detalhesProduto = null;
?>