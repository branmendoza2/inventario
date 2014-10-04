<?php
class Carrera_model extends CI_Model{

	var $id;
	var $nombre;
	var $coordinador_id;
	
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
	
	 public function getApaterno() {
        return $this->apaterno;
    }
	
	public function setCoordinador_id($coordinador) {
        $this->coordinador_id = $coordinador;
        return $this;
    }
	
	 public function getCoordinador_id() {
        return $this->coordinador_id;
    }
	
	//MEtodos de la BD

	function __construct()
	{
		// Llamando al contructor del Modelo
		parent::__construct();
	}
	
	
	function getAll(){
		$query = $this->db->get('carrera');
		return $query->result();
	}
	
	function getAllCarreraCoordinador(){
		$query = $this->db->get('vwcarrera');
		return $query->result();
	}
	
	function getById($id){
        $this->db->where('id', $id);
        $query = $this->db->get('carrera');
        return $query->result();
    }

	function insertar($coordinador)
    {
        $this->db->set('nombre', $coordinador->getNombre());
		$this->db->set('coordinador_id', $coordinador->getCoordinador_id());
        $this->db->insert('carrera');
    }

    function actualizar($carrera)
    {
        $id = $carrera->getId();

        $data = array(
               'nombre' => $carrera->getNombre(),
               'coordinador_id' => $carrera->getCoordinador_id(),
            );

        $this->db->where('id', $id);
        $this->db->update('carrera', $data); 
    }

    

}