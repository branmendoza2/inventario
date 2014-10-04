<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

if($_SESSION!=null)  {

class Area extends CI_Controller {

	public function index()
	{
		$areas=$this->area_model->getAll();
		$this->load->view('head');
		$this->load->view('pantallaCatalogoAreas',compact('areas'));
		$this->load->view('footer');
	}

	public function alta()
	{
		$this->load->view('head');
		$this->load->view('pantallaAltaArea');
		$this->load->view('footer');
	}


	public function insertar()
	{
		$this->area_model->insertar($_REQUEST['nombre']);
		$this->index();
	}

}
	
}else{
	class Area extends CI_Controller {
		public function index()
		{
			$this->load->view('login');
		}
	}
}