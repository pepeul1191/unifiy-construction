<?php

require 'app/vendor/autoload.php';
require_once 'app/config/constants.php';

header('x-powered-by: PHP');
header('Server: Ubuntu');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Content-type: text/html; charset=UTF-8');

Flight::set('flight.views.path', 'app/views');
# Demo
Flight::route('GET /', array('Home','index'));
Flight::route('GET /dist', array('Home','dist'));
Flight::route('GET /error/404', array('Error','error_404'));
Flight::route('GET /demo/listar', array('Demo','listar'));
#Flight::route('POST /demo/params/@id', array('Demo','parametros'));
Flight::route('GET /demo/db', array('Demo','listar_usuarios'));
Flight::route('GET /demo/vista', array('Demo','vista'));
Flight::route('GET /demo/partial', array('Demo','partial'));

Flight::route('GET /contenido/demo_espaniol', array('Contenido','demo_espaniol'));
Flight::route('GET /contenido/demo_ingles', array('Contenido','demo_ingles'));
Flight::route('GET /contenido/home_espaniol', array('Contenido','home_espaniol'));
Flight::route('GET /contenido/home_ingles', array('Contenido','home_ingles'));
/*
Flight::map('notFound', function(){
	Flight::redirect('/error/404');
});
*/
Flight::start();

?>