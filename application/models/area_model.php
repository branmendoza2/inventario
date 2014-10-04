<?php
class Area_Model extends CI_Model{

	var $id;
	var $descripcion;


	
	 public function getId() {
        return $this->id;
    }
   
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    
	 public function getDescripcion() {
        return $this->descripcion;
    }
   
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
        return $this;
    }
	
	

	
	//MEtodos de la BD

	function __construct()
	{
		// Llamando al contructor del Modelo
		parent::__construct();
	}
	
	
	function getAll(){
 
		$query = $this->db->get('areas');
		return $query->result();
	}
	
	

	function insertar($nombre)
    {
        $this->db->set('descripcion', $nombre);
        $this->db->insert('areas');
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