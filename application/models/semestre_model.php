<?php
class Semestre_model extends CI_Model{

	var $title   = '';
	var $content = '';
	var $date    = '';

	function __construct()
	{
		// Llamando al contructor del Modelo
		parent::__construct();
	}

	function getAll(){
		$query = $this->db->get('semestre');
		return $query->result();
	}

}