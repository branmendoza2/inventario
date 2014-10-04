<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

if($_SESSION!=null && $_SESSION['privilegio']=='CO')  {

class Materia extends CI_Controller {

	public function index()
	{
		$materias=$this->materia_model->getAll();
		$this->load->view('head');
		$this->load->view('pantallaCatalogoMateria',compact('materias'));
		$this->load->view('footer');
	}

	public function editarMateria()
	{
		$id=$_REQUEST['id'];
		$materias=$this->materia_model->getById($id);
		$materia=$materias[0];
		$carreras=$this->carrera_model->getAll();
		$semestres=$this->semestre_model->getAll();
		$this->load->view('head');
		$this->load->view('pantallaEditarMateria',compact('materia','carreras','semestres'));
		$this->load->view('footer');
		
	}

	public function insertar()
	{
		$semestres=$this->semestre_model->getAll();
		$carreras=$this->carrera_model->getAll();
		$this->load->view('head');
		$this->load->view('pantallaAltaMateria',compact('semestres','carreras'));
		$this->load->view('footer');
		
	}

	public function insertarMateria()
	{
		$materia = new Materia_model();
		$materia->setNombreMateria($_REQUEST['materia']);
		$materia->setIdCarrera($_REQUEST['carrera']);
		$materia->setIdSemestre($_REQUEST['semestre']);	
		$this->materia_model->insertarTablaMateria($materia);
		$this->index();
	}

	public function actualizar()
	{
		$materia = new Materia_model();
		$materia->setIdMateria($_REQUEST['id']);
		$materia->setNombreMateria($_REQUEST['materia']);
		$materia->setIdCarrera($_REQUEST['carrera']);
		$materia->setIdSemestre($_REQUEST['semestre']);
		$this->materia_model->actualizar($materia);
		$this->index();
	}

	public function asignar(){
		$materias=$this->asignarmateria_model->getAll();
		$profesores=$this->profesor_model->getAll();
		$this->load->view('head');
		$this->load->view('pantallaMateriasImpartir',compact('materias', 'profesores'));
		$this->load->view('footer');
	}
	
	public function asignarActualizar()
	{
		$materia = new asignarmateria_model();
		$materia->setId($_REQUEST['materia']);
		$materia->setProfesor_id($_REQUEST['profe']);
		$this->asignarMateria_model->actualizarProfesor_id($materia);
		$this->index();
	}
	
}
}else{
	class Materia extends CI_Controller {
		public function index()
		{
			$this->load->view('login');
		}
	}
}