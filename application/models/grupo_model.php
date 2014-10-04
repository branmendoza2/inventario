<?php
class Grupo_model extends CI_Model{

	var $id;
    var $nombre;

    var $idCarrera;
    var $nombreCarrera;

    var $idSemestre;
    var $nombreSemestre;

    
    function Grupo(){
    }

    /*ID*/
    
    public function getId() {
        return $this->id;
    }
   
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    
    /*NOMBRE*/
    
    public function getNombre() {
        return $this->nombre;
    }
   
    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }


    /*ID_CARRERA*/
    public function getIdCarrera(){
        return $this->idCarrera;
    }

    public function setIdCarrera($idCarrera){
        $this->idCarrera = $idCarrera;
        return $this;
    }


    /*NOMBRE_CARRERA*/
    public function getNombreCarrera(){
        return $this->nombreCarrera;
    }

    public function setNombreCarrera($nombreCarrera){
        $this->nombreCarrera = $nombreCarrera;
        return $this;
    }


    /*ID_SEMESTRE*/
    public function getIdSemestre(){
        return $this->idSemestre;

    }

    public function setIdSemestre($idSemestre){
        $this->idSemestre = $idSemestre;
        return $this;
    }


    /*NOMBRE_SEMESTRE*/

    public function getNombreSemestre(){
        return $this->nombreSemestre;
    }

    public function setNombreSemestre($nombreSemestre){
        $this->nombreSemestre = $nombreSemestre;
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
	
	function get_last_ten_entries()
	{
		$query = $this->db->get('entries', 10);
		return $query->result();
	}

	function getAll(){
		$query = $this->db->get('vgrupo');
		return $query->result();
	}

    function getById($id){
        $this->db->where('id', $id);
        $query = $this->db->get('grupo');
        return $query->result();
    }

    function getAllCarreras(){
        $query = $this->db->get('carrera');
        return $query->result();
    }

	function insert_entry()
	{
		$this->title   = $_POST['title']; // por favor leer la nota de abajo
		$this->content = $_POST['content'];
		$this->date    = time();
		
		$this->db->insert('entries', $this);
	}

	function update_entry()
	{
		$this->title   = $_POST['title'];
		$this->content = $_POST['content'];
		$this->date    = time();

		$this->db->update('entries', $this, array('id', $_POST['id']));
	}

    function insertar($grupo)
    {
        $this->db->set('nombre', $grupo->getNombre());
        $this->db->set('carrera_id', $grupo->getIdCarrera());
        $this->db->set('semestre_id', $grupo->getIdSemestre());
        $this->db->insert('grupo');
    }

    function actualizar($grupo)
    {
        $id = $grupo->getId();

        $data = array(
               'nombre' => $grupo->getNombre(),
               'carrera_id' => $grupo->getIdCarrera(),
               'semestre_id' => $grupo->getIdSemestre(),
            );

        $this->db->where('id', $id);
        $this->db->update('grupo', $data); 
    }

}