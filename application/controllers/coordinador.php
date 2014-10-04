<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

if($_SESSION!=null && $_SESSION['privilegio']=='CO')  {

class Coordinador extends CI_Controller {

	public function index()
	{
		$profesores=$this->coordinador_model->getAll();
		$this->load->view('head');
		$this->load->view('pantallaCatalogoCoordinadores',compact('profesores'));
		$this->load->view('footer');
	}

	public function alta()
	{
		$this->load->view('head');
		$this->load->view('pantallaAltaCoordinador');
		$this->load->view('footer');
	}

	public function insertar()
	{
		$coordinador = new Coordinador_model();
		$coordinador->setNombre($_REQUEST['nombre']);
		$coordinador->setApaterno($_REQUEST['apaterno']);
		$coordinador->setAmaterno($_REQUEST['amaterno']);
		$coordinador->setUsuario($_REQUEST['usuario']);
		$coordinador->setContrasena($_REQUEST['contrasena']);
		$this->coordinador_model->insertar($coordinador);
		$this->index();
	}

	public function editar()
	{
		$id=$_GET['id'];
		$coordinadores=$this->coordinador_model->getById($id);

		$coordinador = $coordinadores[0];

		$this->load->view('head');
		$this->load->view('pantallaEditarCoordinador',compact('coordinador'));
		$this->load->view('footer');
	}

	public function actualizar()
	{
		$coordinador = new Coordinador_model();
		$coordinador->setId($_REQUEST['id']);
		$coordinador->setNombre($_REQUEST['nombre']);
		$coordinador->setApaterno($_REQUEST['apaterno']);
		$coordinador->setAmaterno($_REQUEST['amaterno']);
		$coordinador->setUsuario($_REQUEST['usuario']);
		$coordinador->setContrasena($_REQUEST['contrasena']);
		$this->coordinador_model->actualizar($coordinador);
		$this->index();
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