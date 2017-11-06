<?php

class Handler_Error
{
		public static function error_404()
		{
				Flight::render('error/404', array(), 'partial');
				Flight::render('layouts/blank', array('title' => 'Recurso no Encontrado'));
		}
}

?>