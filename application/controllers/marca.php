<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

if($_SESSION!=null)  {

class Marca extends CI_Controller {

	public function index()
	{
		$marcas=$this->marca_model->getAll();
		$this->load->view('head');
		$this->load->view('pantallaCatalogoMarcas',compact('marcas'));
		$this->load->view('footer');
	}

	public function alta()
	{
		
		$this->load->view('head');
		$this->load->view('pantallaAltaMarca');
		$this->load->view('footer');
	}


	public function insertar()
	{
		$this->marca_model->insertar($_REQUEST['nombre']);
		$this->index();
	}

}
	
}else{
	class Marca extends CI_Controller {
		public function index()
		{
			$this->load->view('login');
		}
	}
}