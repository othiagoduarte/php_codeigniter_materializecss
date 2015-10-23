<?php
class Produtos extends CI_Model {

	public $id = '';
	public $nome = '';
	public $id_tipo = '';
  	public $id_tamanho = '';
  	public $id_cor = '';
  	public $id_imagem = '';
	public $preco = 0;
	public $cor ;

   	public function __construct(){
	   parent::__construct();
   	}
	
	public function ConectarDB(){
		return $this->load->database('dev'); 	#Desenvolvimento
		// return $this->load->database(); 		#Produção
	}
    	    
	public function getProdutos($idProduto = 0)
	{
		$produtos=array();
		
		if ($this->ConectarDB()) {
					
			$sql='select Produtos.* 
					    ,(select p2.preco 
						    from preco_produto p2 
						   where p2.id_produto = Produtos.id 
					       order by data_cadastro desc
					       limit 1) as preco
				from Produtos ';
			
			if ($idProduto <= 0){
				$query = $this->db->query($sql);
			}else{
				$sql=$sql.'where Id ='.$idProduto;
				$query = $this->db->query($sql);	
			}
						
			if(count($query) > 0){
				foreach ($query->result_array() as  $produto) {
												
					$Model=new Produtos();
					
					$Model->id         = $produto['id'];
					$Model->nome	   = $produto['nome'];
					$Model->id_tipo    = $produto['id_tipo'];
  					$Model->id_tamanho = $produto['id_tamanho'];
  					$Model->id_cor     = $produto['id_cor'];
  					$Model->id_imagem  = $produto['id_imagem'];
					$Model->preco      = $produto['preco'];
	   				array_push($produtos, $Model);
				}
			}			
		}
		
		return $produtos;
	}
		
	public function insert(){
		
		$this->ConectarDB();
		#Grava produto
		$data= array();
		$data['id']		   = $this->id;          
		$data['nome']	   = $this->nome;	  
		$data['id_tipo']   = $this->id_tipo;     
		$data['id_tamanho']= $this->id_tamanho;  
		$data['id_cor']    = $this->id_cor;     
		$data['id_imagem'] = $this->id_imagem;  
		$this->db->insert('produtos', $data);
		#Grava preço
		$data= array();
		$data['id_produto']= $this->db->insert_id();
		$data['preco']     = $this->preco;
		$this->db->insert('preco_produto', $data);
		
	}	
	public function update(){
		$this->ConectarDB();
		#Altera produto
		$this->db->update('produtos', $this, array('id' => $this->id));
		#Grava preço
		$data= array();
		$data['id_produto']= $this->id;
		$data['preco']     = $this->preco;
		$this->db->insert('preco_produto', $data);
	}
	public function delete(){
		$this->ConectarDB();
		$this->db->where('id', $this->id);
		$this->db->delete('produtos');
	}
	public function BeginTrans(){
		$this->db->trans_start();	
	}
	public function Rollback(){
		$this->db->trans_off();	
	}
	public function commit(){
		$this->db->trans_complete();
	}
}