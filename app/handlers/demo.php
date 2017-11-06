<?php

require_once 'app/config/models.php';

class Handler_Demo
{
    public static function hello() 
    {
        echo 'hello world!';
    }

    public static function listar() 
    {
        # listar sistemas
        echo json_encode(Model::factory('Sistema', 'demo')->find_array());
    }

    public static function parametros($id) 
    {
        $query_param = Flight::request()->query['qp'];

    }

    public static function listar_usuarios()
    {


    }

    public static function vista()
    {
    }

    public static function partial($valor)
    {

    }
}

?>