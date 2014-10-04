<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

if($_SESSION!=null)  {

class Estado extends CI_Controller {

	public function index()
	{
		$estados=$this->estado_model->getAll();
		$this->load->view('head');
		$this->load->view('pantallaCatalogoEstados',compact('estados'));
		$this->load->view('footer');
	}

	public function alta()
	{
		$this->load->view('head');
		$this->load->view('pantallaAltaEstado');
		$this->load->view('footer');
	}


	public function insertar()
	{
		$this->estado_model->insertar($_REQUEST['nombre']);
		$this->index();
	}

}
	
}else{
	class Estado extends CI_Controller {
		public function index()
		{
			$this->load->view('login');
		}
	}
}