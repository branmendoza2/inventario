<?php
class Coordinador_model extends CI_Model{

	var $id;
    var $nombre;
	var $apaterno;
    var $amaterno;
	var $usuario;
	var $contrasena;
	var $idcarrera;
	var $nombrecarrera;
	
    function Coordinador_model(){
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
	
	 public function getApaterno() {
        return $this->apaterno;
    }
   
    public function setApaterno($apaterno) {
        $this->apaterno = $apaterno;
        return $this;
    }
	
	 public function getAmaterno() {
        return $this->amaterno;
    }
   
    public function setAmaterno($amaterno) {
        $this->amaterno = $amaterno;
        return $this;
    }
     
	 public function getUsuario() {
        return $this->usuario;
    }
   
    public function setUsuario($usuario) {
        $this->usuario = $usuario;
        return $this;
    }
    public function getContrasena() {
        return $this->contrasena;
    }
   
    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
        return $this;
    }
	
	public function getIdCarrera() {
        return $this->idcarrera;
    }
   
    public function setIdCarrera($idcarrera) {
        $this->idcarrera = $idcarrera;
        return $this;
    }
	
	public function getNombreCarrera() {
        return $this->nombrecarrera;
    }
   
    public function setNombreCarrera($nombrecarrera) {
        $this->nombrecarrera = $nombrecarrera;
        return $this;
    }

	function __construct()
	{
		// Llamando al contructor del Modelo
		parent::__construct();
	}

	function getAll(){
		$query = $this->db->get('vcoordinadorcarrera');
		return $query->result();
	}

    function getById($id){
        $this->db->where('id', $id);
        $query = $this->db->get('coordinador');
        return $query->result();
    }

	function insertar($coordinador)
    {
        $this->db->set('nombre', $coordinador->getNombre());
        $this->db->set('apaterno', $coordinador->getApaterno());
        $this->db->set('amaterno', $coordinador->getAmaterno());
        $this->db->set('usuario', $coordinador->getUsuario());
        $this->db->set('contrasena', $coordinador->getContrasena());
        $this->db->insert('coordinador');
    }

    function actualizar($coordinador)
    {
        $id = $coordinador->getId();

        $data = array(
               'nombre' => $coordinador->getNombre(),
               'apaterno' => $coordinador->getApaterno(),
               'amaterno' => $coordinador->getAmaterno(),
               'usuario' => $coordinador->getUsuario(),
               'contrasena' => $coordinador->getContrasena()
            );

        $this->db->where('id', $id);
        $this->db->update('coordinador', $data); 
    }

    function getAllCoordinador(){
        $query = $this->db->get('coordinador');
        return $query->result();
    }
}