<?php
class Produtos extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('ProdutosModelagem');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['produtos'] = $this->ProdutosModelagem->get_produtos();
                $data['title'] = 'Produtos';

               
                $this->load->view('produtos/index', $data);
     
        }

        public function view($idProduto = NULL)
        {
                $data['produtos'] = $this->ProdutosModelagem->get_produtos($idProduto);
        }
}