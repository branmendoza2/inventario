<?php

class Profesor_model extends CI_Model{
    var $id;
    var $nombre;
	var $apaterno;
	var $amaterno;
	var $usuario;
	var $contrasena;
    
    function Profesor(){
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
	
	function __construct()
	{
		// Llamando al contructor del Modelo
		parent::__construct();
	}

	function getAll(){
		$query = $this->db->get('profesor');
		return $query->result();
	}

    function getById($id){
        $this->db->where('id', $id);
        $query = $this->db->get('profesor');
        return $query->result();
    }

	function insertar($profesor)
    {
        $this->db->set('nombre', $profesor->getNombre());
        $this->db->set('apaterno', $profesor->getApaterno());
        $this->db->set('amaterno', $profesor->getAmaterno());
        $this->db->set('usuario', $profesor->getUsuario());
        $this->db->set('contrasena', $profesor->getContrasena());
        $this->db->insert('profesor');
    }

    function actualizar($profesor)
    {
        $id = $profesor->getId();

        $data = array(
               'nombre' => $profesor->getNombre(),
               'apaterno' => $profesor->getApaterno(),
               'amaterno' => $profesor->getAmaterno(),
               'usuario' => $profesor->getUsuario(),
               'contrasena' => $profesor->getContrasena()
            );

        $this->db->where('id', $id);
        $this->db->update('profesor', $data); 
    }





    
    
    
    
}

?>