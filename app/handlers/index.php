<?php

class Handler_Index
{
    public static function index()
    {
        //Flight::view()->assign('valor', $valor);
        Flight::view()->assign('partial', 'index/index.tpl');
        Flight::view()->display('layouts/site.tpl');
    }
}

?>