<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

if($_SESSION!=null && $_SESSION['privilegio']=='CO')  {
class Carrera extends CI_Controller {

	public function index()
	{
		$carreras=$this->carrera_model->getAllCarreraCoordinador();
		$this->load->view('head');
		$this->load->view('pantallaCatalogoCarreras',compact('carreras'));
		$this->load->view('footer');
	}

	public function alta()
	{
		$coordinadores=$this->coordinador_model->getAllCoordinador();
		$this->load->view('head');
		$this->load->view('pantallaAltaCarrera', compact('coordinadores'));
		$this->load->view('footer');
	}

	public function insertar()
	{
		$carrera = new Carrera_model();
		$carrera->setNombre($_REQUEST['nombre']);
		$carrera->setCoordinador_id($_REQUEST['coordinador_id']);
		$this->carrera_model->insertar($carrera);
		$this->index();
	}

	public function editar()
	{
		$id=$_GET['id'];
		$carreras=$this->carrera_model->getById($id);
		$coordinadores=$this->coordinador_model->getAllCoordinador();
		$carrera = $carreras[0];
		$idCoordinador = $carrera->coordinador_id;
		$this->load->view('head');
		$this->load->view('pantallaEditarCarrera',compact('carrera', 'coordinadores', 'idCoordinador'));
		$this->load->view('footer');
	}

	public function actualizar()
	{
		$carrera = new Carrera_model();
		$carrera->setId($_REQUEST['id']);
		$carrera->setNombre($_REQUEST['nombre']);
		$carrera->setCoordinador_id($_REQUEST['coordinador_id']);
		$this->carrera_model->actualizar($carrera);
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