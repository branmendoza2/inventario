<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

if($_SESSION!=null && $_SESSION['privilegio']=='CO')  {

class Profesor extends CI_Controller {

	public function index()
	{
		$profesores=$this->profesor_model->getAll();
		$this->load->view('head');
		$this->load->view('pantallaCatalogoProfesores',compact('profesores'));
		$this->load->view('footer');
	}

	public function alta()
	{
		$this->load->view('head');
		$this->load->view('pantallaAltaProfesor');
		$this->load->view('footer');
	}

	public function insertar()
	{
		$profesor = new Profesor_model();
		$profesor->setNombre($_REQUEST['nombre']);
		$profesor->setApaterno($_REQUEST['apaterno']);
		$profesor->setAmaterno($_REQUEST['amaterno']);
		$profesor->setUsuario($_REQUEST['usuario']);
		$profesor->setContrasena($_REQUEST['contrasena']);
		$this->profesor_model->insertar($profesor);
		$this->index();
	}

	public function editar()
	{
		$id=$_GET['id'];
		$profesores=$this->profesor_model->getById($id);

		$profesor = $profesores[0];

		$this->load->view('head');
		$this->load->view('pantallaEditarProfesor',compact('profesor'));
		$this->load->view('footer');
	}

	public function actualizar()
	{
		$profesor = new Profesor_model();
		$profesor->setId($_REQUEST['id']);
		$profesor->setNombre($_REQUEST['nombre']);
		$profesor->setApaterno($_REQUEST['apaterno']);
		$profesor->setAmaterno($_REQUEST['amaterno']);
		$profesor->setUsuario($_REQUEST['usuario']);
		$profesor->setContrasena($_REQUEST['contrasena']);
		$this->profesor_model->actualizar($profesor);
		$this->index();
	}
}
}else{
    class Profesor extends CI_Controller {
        public function index()
        {
            $this->load->view('login');
        }
    }
}
