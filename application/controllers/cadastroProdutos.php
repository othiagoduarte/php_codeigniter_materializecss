<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroProdutos extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Cor');
		$this->load->model('tamanho');
		$this->load->model('Tipo');
		$this->load->model('Produtos');
		$this->load->helper('url_helper');
		$this->load->helper('array');
		
    }

	public function index()
	{		
		/*Lista de produtos*/
		$lista_produtos = array();
				
		$produtotemp = array();	
		$produtotemp['nome'] ='Camisa';
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
		
		/*Lista de cores*/
		
		$lista_cores = array();
		
		$ModelCores = new Cor();
		$ModelCores->idCor='1';
        $ModelCores->nome='AZUL';            		
				 
		$lista_cores[] = $ModelCores;
		
		$ModelCores= new Cor();
		$ModelCores->idCor='2';
        $ModelCores->nome='AMARELO';            		
				 
		$lista_cores[] = $ModelCores;
		
		$ModelCores= new Cor();
		$ModelCores->idCor='3';
        $ModelCores->nome='VERMELJO';            		
				 
		$lista_cores[] = $ModelCores;
		
		/*Lista de tamanhos*/
		$lista_tamanhos = array();
		
		$tamanho = new Tamanho();
		$tamanho->idTamanho = '1';
		$tamanho->nome = 'PP';
		
		$lista_tamanhos[] = $tamanho;
		
		$tamanho = new Tamanho();
		$tamanho->idTamanho = '2';
		$tamanho->nome = 'P';
		
		$lista_tamanhos[] = $tamanho;
		
		$tamanho = new Tamanho();
		$tamanho->idTamanho = '3';
		$tamanho->nome = 'M';
		
		$lista_tamanhos[] = $tamanho;
		
		$tamanho = new Tamanho();
		$tamanho->idTamanho = '4';
		$tamanho->nome = 'G';
		
		$lista_tamanhos[] = $tamanho;
		
		$tamanho = new Tamanho();
		$tamanho->idTamanho = '5';
		$tamanho->nome = 'GG';
		
		$lista_tamanhos[] = $tamanho;
		
		/*Lista de tipos*/
		$lista_tipo[] = 'VESTUARIO';
		$lista_tipo[] = 'PAPELARIA';
		$lista_tipo[] = 'OUTROS';
		
		$lista_tipos = array();
		
		$tipo = new Tipo();
		$tipo->idTipo = '1';
		$tipo->nome = 'VESTUARIO';
		$lista_tipos[] = $tipo; 				
		
		$tipo = new Tipo();
		$tipo->idTipo = '2';
		$lista_tipo[] = 'PAPELARIA';
		$tipo->nome = 'VESTUARIO';
		$lista_tipos[] = $tipo; 				
		
		$tipo = new Tipo();
		$tipo->idTipo = '3';
		$tipo->nome = 'OUTROS';
		$lista_tipos[] = $tipo; 				
		
		/*Passar dados*/
		
		$data['lista_tamanhos'] = $lista_tamanhos;
		$data['lista_cores'] = $lista_cores;
		$data['lista_produtos'] = $lista_produtos;
		$data['lista_tipos'] = $lista_tipos;			
		$data['lista_cores'] = $lista_cores;
		
		/*Carregar view*/
		
		$this->load->view('header');
		$this->load->view('cadastroProdutos/listarProdutos', $data );
		$this->load->view('footer');
	
	}
	public function listar(){
		
		$Model=new Produtos();

		//var_dump($Model->getProdutos());
		var_dump($Model->getProdutos(1));
		
		
	}
	public function inserir(){
		
		var_dump($_POST);
		$Model=new Produtos();
		
		$Model->id         = $this->input->post('id');
		$Model->nome	   = $this->input->post('nome');
		$Model->id_tipo    = $this->input->post('idtipo');
		$Model->id_tamanho = $this->input->post('idtamanho');
		$Model->id_cor     = $this->input->post('idcor');
		$Model->id_imagem  = 0;//$this->input->post('idimagem');
		$Model->preco  	   = $this->input->post('preco');
		var_dump($Model);
		echo $Model->insert();
		
	}
	public function editar(){
		
		$Produto = new Produtos();
		$Produto->id = 12;
		$Produto->nome = $this->input->post('nome');
		$Produto->id_tipo = $this->input->post('tipo');
		$Produto->update();
		header("Location: /cadastroprodutos");
	}
	public function excluir(){
		$Produto = new Produtos();
		$Produto->id = 12;
		$Produto->delete;
		header("Location: /cadastroprodutos");
	}		
	public function produtos()
	{	$this->load->view('header');
		$this->load->view('cadastroProdutos/produtos');
		$this->load->view('footer');
	}
	public function tamanhoproduto()
	{	$this->load->view('header');
		$this->load->view('cadastroProdutos/tamanhoproduto');
		$this->load->view('footer');
	}
	public function corproduto()
	{	$this->load->view('header');
		$this->load->view('cadastroProdutos/corproduto');
		$this->load->view('footer');
	}			
	public function AjaxRequestTeste()
	{
		echo json_encode( array( 'date' => date( 'H:i:s' ),'nome'=>'Jorge' ) );
	}
	public function teste(){
		$produto = new Produtos();
		
		/*
		$produto->nome = 'Camisa Branca';
		$produto->id_tipo = 1;
		$produto->insert();
		var_dump($produto);
		
		$newProduto = new Produtos();
		//var_dump($produto->getProdutos());
		$newProduto = random_element($produto->getProdutos());
		
		var_dump($newProduto);
		
		$newProduto->nome = 'Camisa velha'; 
		$newProduto->update();
			
		//$newProduto = random_element($produto->getProdutos());
		 
		/*
		
		$newProduto->nome = 'Camisa Branca';
		var_dump($newProduto);
		$newProduto->BeginTrans();
		$newProduto->update();
		$newProduto->commit();
		*/
		/*
		echo "Produto deletado";
		
		var_dump($newProduto);
		
		$newProduto->BeginTrans();
		$newProduto->delete();
		$newProduto->commit();
		
		*/
	}
}