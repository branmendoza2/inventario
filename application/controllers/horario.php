<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

if($_SESSION!=null && $_SESSION['privilegio']=='CO')  {

class Horario extends CI_Controller {

	public function index()
	{
		$horarios=$this->horario_model->getAll();
		$this->load->view('head');
		$this->load->view('pantallaCatalogoHorario',compact('horarios'));
		$this->load->view('footer');
	}
	
	public function generar()
	{
		$horarios=$this->horario_model->generar();
		$this->load->view('head');
		$this->load->view('pantallaCatalogoHorario',compact('horarios'));
		$this->load->view('footer');
	}
}
}else{
	class Coordinador extends CI_Controller {
		public function index()
		{
			$this->load->view('login');
		}
	}
}