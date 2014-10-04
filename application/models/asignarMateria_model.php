<?php
class AsignarMateria_model extends CI_Model{
    var $id;
    var $nombre;
    var $carrera_id;
    var $semestre_id;
    var $profesor_id;
    var $horarioFijo;
    
    function AsignarMateria_model(){
    }
    
    public function getId() {
        return $this->id;
    }
   
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    
    
    public function getNombre() {
        return $this->nombre;
    }
   
    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }
    
    
    public function getCarrera_id() {
        return $this->carrera_id;
    }
   
    public function setCarrera_id($carrera_id) {
        $this->carrera_id = $carrera_id;
        return $this;
    }
    
    public function getSemestre_id() {
        return $this->semestre_id;
    }
   
    public function setSemestre_id($semestre_id) {
        $this->semestre_id = $semestre_id;
        return $this;
    }
    
    public function getProfesor_id() {
        return $this->profesor_id;
    }
   
    public function setProfesor_id($profesor_id) {
        $this->profesor_id = $profesor_id;
        return $this;
    }
	
	function getAll(){
		$query = $this->db->get('materia');
		return $query->result();
	}
	
	function actualizarProfesor_id($materia)
    {
        $id = $materia->getId();
        $data = array(
				'profesor_id' => $materia->getProfesor_id()
		);
        $this->db->where('id', $id);
        $this->db->update('materia', $data); 
    }
    
}
