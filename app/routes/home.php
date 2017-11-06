<?php

class Home
{
		public static function index()
		{
				Flight::render('index/index', array('data' => 'Bob'), 'partial');
				Flight::render('layouts/app', array('title' => 'Bienvenido'));
		}
}

?>