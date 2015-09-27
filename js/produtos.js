$(document).ready(function()
{
	editarProduto();
	selecionar();
	//GravarProduto();
		
});

function editarProduto($codProduto){


	var btnModal=$('#modalBtn');
	
	btnModal.unbind('click');
	btnModal.bind('click',function()
	{
		var modal=$('#editarProduto');
		
		modal.css('max-height',700);
		modal.openModal();		
			
	});

	
	
}
function selecionar(){

    $('select').material_select();

  }
         
		 
function GravarProduto()
{
		var btnGravarProduto=$('#gravarProduto')
		
		btnGravarProduto.unbind();
		btnGravarProduto.bind('click',function(e)
		{
				e.preventDefault();
				var modal=$('#editarProduto');
				
				modal.closeModal();
				
				Materialize.toast('Produto cadastrado com sucesso!!!', 6000,'aling-center'	)		
		});	
}		 
		 
		 

 
          