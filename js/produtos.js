$(document).ready(function()
{
	selecionar();
	editarProduto();
	excluirProduto();
	cadastrarProduto();
	
	//GravarProduto(); // Tratar essa função para receber uma confirmação de cadastro


		
});

function editarProduto($codProduto){

	var btnModal=$('#btnEditar');
	
	btnModal.unbind('click');
	btnModal.bind('click',function()
	{
		var modal=$('#editarProduto');
		
		modal.css('max-height',700);
		modal.openModal();		
			
	});	
	
}
function cadastrarProduto(){

	var btnModal=$('#btnCadastrar');
	
	btnModal.unbind('click');
	btnModal.bind('click',function()
	{
		var modal=$('#cadastrarProduto');
		
		modal.css('max-height',700);
		modal.openModal();		
			
	});
}

function excluirProduto(){

	var btnModal=$('#btnExcluir');
	
	btnModal.unbind('click');
	btnModal.bind('click',function()
	{
		var modal=$('#excluirProduto');
		
		modal.css('max-height',700);
		modal.openModal();	
		ClickBtnExcluirProduto();	
			
	});
	
}
function selecionar(){

    $('select').material_select();

 }

 function ClickBtnExcluirProduto()
 {
 	var btnExcluir=$("#excluirProduto");

 	btnExcluir.unbind('click');
 	btnExcluir.bind('click',function(e)
 	{
 		e.preventDefault();

 		  $.ajax({
              'url' : "cadastroprodutos/AjaxRequestTeste",
              'type' : 'POST',
              'success' : function(data){ 
              	 var result = JSON.parse( data ); 

              		console.log(result.date +" Nome: " +result.nome);
              }
          });   

 	});


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
		 
		 

 
          