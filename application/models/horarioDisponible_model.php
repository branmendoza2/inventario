<?php
class HorarioDisponible_model extends CI_Model{    
    var $id;
    var $inicio;
    var $fin;
    var $dia;
    var $idProfesor;
    
    
    function HorarioDisponible_model(){
    }
    
    public function getId() {
        return $this->id;
    }
   
    public function setId($id) {
        $this->id = $id;
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

    public function getIdProfesor() {
        return $this->idProfesor;
    }
   
    public function setIdProfesor($idProfesor) {
        $this->idProfesor = $idProfesor;
        return $this;
    }











	function __construct()
	{
		// Llamando al contructor del Modelo
		parent::__construct();
	}

	function getAll(){
		$query = $this->db->get('horario_disponible');
		return $query->result();
	}

    function getById($id){
        $this->db->where('profesor_id', $id);
        $query = $this->db->get('horario_disponible');
        return $query->result();
    }

	function insertar($horarioDisponible)
    {
        $idProfesor = $_SESSION['usuario'];
        $this->db->where('profesor_id', $idProfesor);
        $this->db->delete('horario_disponible');

        $json = $horarioDisponible;
        $obj = json_decode($json);
        $max = sizeof($obj);

        for($i = 0; $i < $max;$i++) {
            $this->db->set('inicio', $obj[$i]->{'inicio'});
            $this->db->set('fin', $obj[$i]->{'fin'});
            $this->db->set('dia', $obj[$i]->{'diaSemana'});
            $this->db->set('profesor_id', $idProfesor);
            $this->db->insert('horario_disponible');
        }
        
    }

    function actualizar($horarioDisponible)
    {
        $id = $horarioDisponible->getId();
        $data = array(
               'inicio' => $horarioDisponible->getInicio(),
               'fin' => $horarioDisponible->getFin(),
               'dia' => $horarioDisponible->getDia(),
               'profesor_id' => $horarioDisponible->getIdProfesor()
            );

        $this->db->where('id', $id);
        $this->db->update('horario_disponible', $data); 
    }
}