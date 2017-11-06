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
Flight::route('GET /', array('Index','index'));
Flight::route('GET /error/404', array('Error','error_404'));
Flight::route('GET /demo/listar', array('Demo','listar'));
#Flight::route('POST /demo/params/@id', array('Demo','parametros'));
Flight::route('GET /demo/db', array('Demo','listar_usuarios'));
Flight::route('GET /demo/vista', array('Demo','vista'));
Flight::route('GET /demo/partial', array('Demo','partial'));
/*
Flight::map('notFound', function(){
	Flight::redirect('/error/404');
});
*/
Flight::start();

?>