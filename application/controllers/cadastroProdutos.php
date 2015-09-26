<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroProdutos extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('cadastroProdutos/produtos');
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
