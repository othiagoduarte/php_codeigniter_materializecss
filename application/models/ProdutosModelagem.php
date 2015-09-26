<?php
class ProdutosModelagem extends CI_Model {


		public $idProduto='';
		public $nome='';
		public $tipoProdutoId='';


        public function __construct()
        {
                $this->load->database();
        }



        public function get_produtos($idProduto = 0)
		{
		        if ($idProduto <= 0)
		        {
		                $query = $this->db->get('produto');


		                if(count($query) > 0)
		                {

		                	$produtos=array();

		                	foreach ($query->result_array() as  $produto) {

		                		$ModelProdutos=new ProdutosModelagem();

		                		$ModelProdutos->idProduto=$produto['id'];
            		     		$ModelProdutos->nome=$produto['nome'];
            		     		$ModelProdutos->tipoProdutoId=$produto['id_tipo'];
            		     		
		                		array_push($produtos, $ModelProdutos);
		                	}
		                }

		                return $produtos ;
		        }

		        $query = $this->db->get_where('produto', array('id' => $idProduto));

		         if(count($query) > 0)
		                {

		                	$produtos=array();

		                	foreach ($query->result_array() as $key => $produto) {

            		     		$ModelProdutos=new ProdutosModelagem();

            		     		$ModelProdutos->idProduto=$produto['id'];
            		     		$ModelProdutos->nome=$produto['nome'];
            		     		$ModelProdutos->tipoProdutoId=$produto['id_tipo'];

		                		array_push($produtos, $ModelProdutos);
		                	}
		                }


		        return $produtos;
		}

}


