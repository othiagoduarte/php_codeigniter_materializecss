<?php
class CorModelagem extends CI_Model {

		public $idCor='';
		public $nome='';



        public function __construct()
        {
                //$this->load->database();
        }



        public function get_cores($idCor = 0)
		{
		        if ($idCor <= 0)
		        {
		                $query = $this->db->get('cor');


		                 if(count($query) > 0)
		                {

		                	$cores=array();

		                	foreach ($query->result_array() as  $cor) {

		                		$ModelCores=new CorModelagem();

		                		$ModelCores->idCor=$cor['id'];
            		     		$ModelCores->nome=$cor['nome'];            		
            		     		
		                		array_push($cores, $ModelProdutos);
		                	}
		                }

		                return $cores ;


		        }

		        $query = $this->db->get_where('cor', array('id' => $idCor));

		       				 $cores=array();

		                	foreach ($query->result_array() as  $cor) {

		                		$ModelCores=new CorModelagem();

		                		$ModelCores->idCor=$cor['id'];
            		     		$ModelCores->nome=$cor['nome'];            		
            		     		
		                		array_push($cores, $ModelProdutos);
		                	}

		        return $cores;
		}

}


