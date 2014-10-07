<?php
class estado_model extends CI_Model{

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
 
		$query = $this->db->get('estado');
		return $query->result();
	}


    function getById($id){
 
        $query = $this->db->query('SELECT ed.id,ed.equipo_id,ed.estado_id,ed.fecha,es.descripcion from detalle_estado ed,estado es where ed.estado_id=es.id and ed.equipo_id='.$id.' order by ed.id asc ');
        return $query->result();
    }
	
	

	function insertar($nombre)
    {
        $this->db->set('descripcion', $nombre);
        $this->db->insert('estado');
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