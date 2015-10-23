<?php
class Imagem extends CI_Model {

	public $id='';
	public $descricao='';
	public $caminho='';

   	public function __construct(){
	   parent::__construct();
	   $this->load->library('image_lib');
   	}
	
	public function ConectarDB(){
		return $this->load->database('dev'); 	#Desenvolvimento
		// return $this->load->database(); 		#Produção
	}
    	    
	public function getImagem()
	{
		$imagens = array();
		
		return $imagens;
	}
		
	public function insert(){
		
		$this->ConectarDB();
		
		$data= array();
		$this->db->insert('imagem', $data);
		
	}	
	public function update(){
		$this->ConectarDB();
		#Altera produto
		$this->db->update('', $this, array('id' => $this->id));
	}
	public function delete(){
		$this->ConectarDB();
		$this->db->where('', $this->id);
		$this->db->delete('');
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
