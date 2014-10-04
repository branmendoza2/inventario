<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function validar()
	{
		$usuario=$_REQUEST['usuario'];
		$contrasena=$_REQUEST['contrasena'];
		$url = asset_url();
		
		if ( $usuario==null or $contrasena ==null){
				echo "<script type='text/javascript'>window.location='$url';</script>";
		}else{
			$resultado=$this->validarUsuario($usuario,$contrasena); 

			if ($resultado == 1){
				
					$inicio= asset_url().'index.php/area';
					echo "<script type='text/javascript'>window.location='$inicio';</script>";

		    }else{
				echo "<script type='text/javascript'>window.location='$url';</script>";
		    }
		}
	}

	function validarUsuario($usuario, $contrasena)
	{
		$valoret=0;
		
		$sql = "select * from usuario where user='$usuario' and pass='$contrasena'";
   		$consulta = $this->db->query($sql);		
		
		foreach ($consulta->result() as $fila)
		{
			$_SESSION['usuario']=$fila->id;
		    $valoret=1;
		}

		return $valoret;
	}	

	function logout()
	{
		session_destroy();
		$this->index();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */