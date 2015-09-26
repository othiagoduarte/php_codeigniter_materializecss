$(document).ready(function()
{
	editarProduto();
	selecionar();
		
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
 $(document).ready(function() {
    $('select').material_select();
  });
  }
         
 
          