<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

if($_SESSION!=null && $_SESSION['privilegio']=='CO')  {

class Grupo extends CI_Controller {

	
	public function index()
	{
		$grupo=$this->grupo_model->getAll();
		$this->load->view('head');
		$this->load->view('pantallaCatalogoGrupos',compact('grupo'));
		$this->load->view('footer');
	}

	public function alta()
	{
		$carreras = $this->grupo_model->getAllCarreras();
		$this->load->view('head');
		$this->load->view('pantallaAltaGrupo',compact('carreras'));
		$this->load->view('footer');
	}

	public function insertar()
	{
		$grupo = new Grupo_model();
		$grupo->setNombre($_REQUEST['nombre']);
		$grupo->setIdCarrera($_REQUEST['carrera']);
		$grupo->setIdSemestre($_REQUEST['semestre']);
		$this->grupo_model->insertar($grupo);
		$this->index();
	}

	public function editar()
	{
		$carreras = $this->grupo_model->getAllCarreras();
		$id=$_GET['id'];
		$grupos=$this->grupo_model->getById($id);

		$grupo = $grupos[0];

		$this->load->view('head');
		$this->load->view('pantallaEditarGrupo',compact('grupo', 'carreras'));
		$this->load->view('footer');
	}

	public function actualizar()
	{
		$grupo = new Grupo_model();
		$grupo->setId($_REQUEST['id']);
		$grupo->setNombre($_REQUEST['nombre']);
		$grupo->setIdCarrera($_REQUEST['carrera']);
		$grupo->setIdSemestre($_REQUEST['semestre']);
		$this->grupo_model->actualizar($grupo);
		$this->index();
	}

	
}
}else{
	class Grupo extends CI_Controller {
		public function index()
		{
			$this->load->view('login');
		}
	}
}