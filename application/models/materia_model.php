<?php
class Materia_model extends CI_Model{

	var $idMateria;
    var $nombreMateria;
    var $idCarrera;
    var $nombreCarrera;
    var $idSemestre;
    var $nombreSemestre;
    
    
    
    
    function Materia(){
    }
    
    public function getIdMateria() {
        return $this->idMateria;
    }
   
    public function setIdMateria($idMateria) {
        $this->idMateria = $idMateria;
        return $this;
    }
    
    public function getNombreMateria() {
        return $this->nombreMateria;
    }
   
    public function setNombreMateria($nombreMateria) {
        $this->nombreMateria = $nombreMateria;
        return $this;
    }
    
    public function getIdCarrera() {
        return $this->idCarrera;
    }
   
    public function setIdCarrera($idCarrera) {
        $this->idCarrera = $idCarrera;
        return $this;
    }
    
    public function getNombreCarrera() {
        return $this->nombreCarrera;
    }
   
    public function setNombreCarrera($nombreCarrera) {
        $this->nombreCarrera = $nombreCarrera;
        return $this;
    }
    
    public function getIdSemestre() {
        return $this->idSemestre;
    }
   
    public function setIdSemestre($idSemestre) {
        $this->idSemestre = $idSemestre;
        return $this;
    }




	var $title   = '';
	var $content = '';
	var $date    = '';

	function __construct()
	{
		// Llamando al contructor del Modelo
		parent::__construct();
	}
	
	
	function getAll(){
		$query = $this->db->get('vmaterias');
		return $query->result();
	}

    function getById($id){
        $this->db->where('idmateria', $id);
        $query = $this->db->get('vmaterias');
        return $query->result();
    }

	function insertarTablaMateria($materia)
    {
        $this->db->set('nombre', $materia->getNombreMateria());
        $this->db->set('carrera_id', $materia->getIdCarrera());
        $this->db->set('semestre_id', $materia->getIdSemestre());
        $this->db->insert('materia');

    }

    function actualizar($materia)
    {
        $id = $materia->getIdMateria();

        $data = array(
               'nombre' => $materia->getNombreMateria(),
               'carrera_id' => $materia->getIdCarrera(),
               'semestre_id' => $materia->getIdSemestre(),
               
            );

        $this->db->where('id', $id);
        $this->db->update('materia', $data); 
    }

}