<?php


class Horario_model extends CI_Model{



		
	var $idHorario   = '';
	var $inicio   = '';
	var $fin = '';
	var $dia = '';
	var $idMateria = '';
	var $nombreMateria = '';
	var $idGrupo = '';
	var $nombreGrupo = '';
	var $nombreProfesor = '';

	
	
    function Horario_model(){
    }
    

		 public function getIdHorario() {
        return $this->idHorario;
    }
   
    public function setIdHorario($idHorario) {
        $this->idHorario = $idHorario;
        return $this;
    }
	

		 public function getInicio() {
        return $this->inicio;
    }
     public function setInicio($inicio) {
        $this->inicio = $inicio;
        return $this;
    }
   
   
 
	
	
		 public function getFin() {
        return $this->fin;
    }
   
    public function setFin($fin) {
        $this->fin = $fin;
        return $this;
    }
	
	
	
		
		 public function getDia() {
        return $this->dia;
    }
   
    public function setDia($dia) {
        $this->dia = $dia;
        return $this;
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
	
	

	
	
				 public function getIdGrupo() {
        return $this->idGrupo;
    }
   
    public function setIdGrupo($idGrupo) {
        $this->idGrupo = $idGrupo;
        return $this;
    }
	
	
				 public function getNombreGrupo() {
        return $this->nombreGrupo;
    }
   
    public function setNombreGrupo($nombreGrupo) {
        $this->nombreGrupo = $nombreGrupo;
        return $this;
    }
	

		
				 public function getNombreProfesor() {
        return $this->nombreProfesor;
    }
   
    public function setNombreProfesor($nombreProfesor) {
        $this->nombreProfesor = $nombreProfesor;
        return $this;
    }
	
	


	function __construct()
	{
		// Llamando al contructor del Modelo
		parent::__construct();
	}

	function getAll(){
		$query = $this->db->get('vhorarios2');
		return $query->result();
	}

    function generar(){
        $sql = "CALL prueba_horarios()";
        $query = $this->db->query($sql);
        return $query->result();
    }

    

}