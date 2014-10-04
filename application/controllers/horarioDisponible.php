<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

if($_SESSION!=null && $_SESSION['privilegio']=='PR')  {

class HorarioDisponible extends CI_Controller {

	public function index()
	{
		$horarioDisponible=$this->horariodisponible_model->getById($_SESSION['usuario']);
		$this->load->view('head');
		$this->load->view('pantallaHorarioDisponible',compact('horarioDisponible'));
		$this->load->view('footer');
	}

	public function alta()
	{
		$this->load->view('head');
		$this->load->view('pantallaHorarioDisponible');
		$this->load->view('footer');
	}

	public function insertar()
	{
		$this->horariodisponible_model->insertar($_REQUEST['horasDisponibles']);
		$this->index();
	}

}
	
}else{
	class HorarioDisponible extends CI_Controller {
		public function index()
		{
			$this->load->view('login');
		}
	}
}