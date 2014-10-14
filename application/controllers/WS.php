<?php

require APPPATH.'/libraries/REST_Controller.php';

class WS extends REST_Controller
{

	function equipos_get()
    {
        //$users = $this->some_model->getSomething( $this->get('limit') );
        $equipos=$this->equipo_model->getAll();
        //$equipos= $this->equipo_model->getIncidenciasPorEquipo($this->get('id'));;
        
        $arregloFinal = array();

        $i=0;

        foreach ($equipos as $value) {
            //$arregloFinal(i => array('id'=> $value->id, 'nombre' => $value->nombre));
            $arregloFinal[$i] = array('id'=> $value->id, 'nombre' => $value->nombre, 'modelo' => $value->modelo, 'nserie' => $value->nserie, 'ninventario' => $value->ninventario, 'observacion' => $value->observacion, 'marca' => $value->marca, 'area' => $value->nserie, 'estado' => $value->nserie, 'incidencias' => $this->equipo_model->getIncidenciasPorEquipo($value->id));
            $i= $i + 1;
        }


        if($arregloFinal)
        {
            $this->response($arregloFinal, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('ERROR' => 'No se encontraron equipos'), 404);
        }
    }

	function users_get()
    {
        //$users = $this->some_model->getSomething( $this->get('limit') );
        $users = array(
			array('id' => 1, 'name' => 'Some Guy', 'email' => 'example1@example.com'),
			array('id' => 2, 'name' => 'Person Face', 'email' => 'example2@example.com'),
			array('id' => 3, 'name' => 'Scotty', 'email' => 'example3@example.com', 'fact' => array('hobbies' => array('fartings', 'bikes'))),
		);
        
        if($users)
        {
            $this->response($users, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'Couldn\'t find any users!'), 404);
        }
    }

    function user_delete()
    {
    	//$this->some_model->deletesomething( $this->get('id') );
        $message = array('id' => $this->get('id'), 'message' => 'DELETED!');
        
        $this->response($message, 200); // 200 being the HTTP response code
    }

    function user_get()
    {
        //$users = $this->some_model->getSomething( $this->get('limit') );
        $data = array('returned: '. $this->get('id'));
        $this->response($data);
    }

}
?>