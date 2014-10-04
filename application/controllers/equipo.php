<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

if($_SESSION!=null)  {

class Equipo extends CI_Controller {

	public function index()
	{
		$equipo=$this->equipo_model->getAll();
		$this->load->view('head');
		$this->load->view('pantallaCatalogoEquipos',compact('equipo'));
		$this->load->view('footer');
	}

	public function area()
	{	
		$id=$_GET['id'];
		$equipo=$this->equipo_model->getByArea($id);
		$this->load->view('head');
		$this->load->view('pantallaCatalogoEquipos',compact('equipo'));
		$this->load->view('footer');
	}

	public function unico()
	{	
		$id=$_GET['id'];
		$equipo=$this->equipo_model->getById($id);
		$this->load->view('head');
		$this->load->view('pantallaDetalleEquipo',compact('equipo'));
		$this->load->view('footer');
	}

	public function alta()
	{
		$areas=$this->area_model->getAll();
		$marcas=$this->marca_model->getAll();
		$estados=$this->estado_model->getAll();
		$this->load->view('head');
		$this->load->view('pantallaAltaEquipo',compact('areas','marcas','estados'));
		$this->load->view('footer');
	}




	public function insertar()
	{
		$uploaddir = 'assets/img/';
		$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
		$equipo = new Equipo_Model();
		$equipo->setNombre($_REQUEST['nombre']);
		$equipo->setMarca($_REQUEST['marca']);
		$equipo->setModelo($_REQUEST['modelo']);
		$equipo->setNSerie($_REQUEST['nserie']);
		$equipo->setNInventario($_REQUEST['ninventario']);
		$equipo->setImagen($_FILES['userfile']['name']);
		$equipo->setObservacion($_REQUEST['observacion']);
		$equipo->setEstado($_REQUEST['estado']);
		$equipo->setArea($_REQUEST['area']);		
		move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);	
		$this->equipo_model->insertar($equipo);
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