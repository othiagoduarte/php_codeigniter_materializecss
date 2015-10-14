<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroProdutos extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Cor');
		$this->load->model('tamanho');
		$this->load->model('Tipo');
    	$this->load->helper('url_helper');
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
	
	public function produtos()
	{
		$this->load->view('cadastroProdutos/produtos');
	}
	public function tamanhoproduto()
	{
		$this->load->view('cadastroProdutos/tamanhoproduto');
	}
	public function corproduto()
	{
		$this->load->view('cadastroProdutos/corproduto');
	}
}
