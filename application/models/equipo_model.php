<?php
class Equipo_Model extends CI_Model{

	var $id;
	var $nombre;
	var $marca;
    var $modelo;
    var $nserie;
    var $ninventario;
    var $estado;
    var $area;
    var $imagen;
    var $observacion;

	
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
	
	 public function getMarca () {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
        return $this;
    }

     public function getModelo  () {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
        return $this;
    }

      public function getNSerie  () {
        return $this->nserie;
    }

    public function setNSerie($nserie) {
        $this->nserie = $nserie;
        return $this;
    }

     public function getNIventario  () {
        return $this->ninventario;
    }

    public function setNInventario($ninventario) {
        $this->ninventario = $ninventario;
        return $this;
    }

     public function getImagen  () {
        return $this->imagen;
    }

    public function setImagen($imagen) {
        $this->imagen = $imagen;
        return $this;
    }
     public function getEstado  () {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
        return $this;
    }

     public function getArea  () {
        return $this->area;
    }

    public function setArea($area) {
        $this->area = $area;
        return $this;
    }

         public function getObservacion  () {
        return $this->observacion;
    }

    public function setObservacion($observacion) {
        $this->observacion = $observacion;
        return $this;
    }
	

	
	//MEtodos de la BD

	function __construct()
	{
		// Llamando al contructor del Modelo
		parent::__construct();
	}
	
	
	function getAll(){
		$query = $this->db->query('SELECT e.id,e.nombre,e.modelo,e.nserie,e.ninventario,e.observacion,e.imagen,m.descripcion marca,a.descripcion Area,es.descripcion Estado from equipo e,marca m, areas a, estado es,detalle_estado de where e.marca_id=m.id and e.area_id=a.id and e.id= de.equipo_id and es.id=(Select estado_id from detalle_estado where id=(select max(id) from detalle_estado where equipo_id=e.id)) group by e.id');
		return $query->result();
	}
	
    function getById($id){
        $query = $this->db->query('SELECT e.id,e.nombre,e.modelo,e.nserie,e.ninventario,e.observacion,e.imagen,m.descripcion marca,a.descripcion Area,es.descripcion Estado from equipo e,marca m, areas a, estado es,detalle_estado de where e.marca_id=m.id and e.area_id=a.id and e.id= de.equipo_id and es.id=(Select estado_id from detalle_estado where id=(select max(id) from detalle_estado where equipo_id=e.id)) and e.id ='.$id . ' group by e.id');
        return $query->result();
    }
	
	function getByArea($id){
        $query = $this->db->query('SELECT e.id,e.nombre,e.modelo,e.nserie,e.ninventario,e.observacion,e.imagen,m.descripcion marca,a.descripcion Area,es.descripcion Estado from equipo e,marca m, areas a, estado es,detalle_estado de where e.marca_id=m.id and e.area_id=a.id and e.id= de.equipo_id and es.id=(Select estado_id from detalle_estado where id=(select max(id) from detalle_estado where equipo_id=e.id)) and e.area_id ='.$id . ' group by e.id');
        return $query->result();
    }

    function getMaxId(){

        $query = $this->db->query('SELECT MAX(id) id from equipo');
        $id=$query->row_array();
        return $id['id'];

    }

    

	function insertar($equipo)
    {
        $this->db->set('nombre', $equipo->getNombre());
        $this->db->set('marca_id', $equipo->getMarca());
        $this->db->set('modelo', $equipo->getModelo());
        $this->db->set('nserie', $equipo->getNSerie());
        $this->db->set('ninventario', $equipo->getNIventario());
        $this->db->set('imagen', $equipo->getImagen());
        $this->db->set('observacion', $equipo->getObservacion());
        $this->db->set('area_id', $equipo->getArea());
        $this->db->insert('equipo');
        $this->db->set('equipo_id', $equipo->getId());
        $this->db->set('estado_id', $equipo->getEstado());
        $this->db->insert('detalle_estado');
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

    function getIncidenciasPorEquipo($id){
        $query = $this->db->query('select i.descripcion, i.fecha, i.reporto, s.Detalle solucion, s.Ingeniero ingeniero, s.Fecha fecha_solucion, ev.Detalle evento from Incidencia i, Solucion s, Evento ev where i.Equipo_id = '. $id .' and i.Evento_id = ev.Id and i.Solucion_id = s.Id');
        return $query->result();
    }

}