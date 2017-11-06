<?php

class Handler_Index
{
		public static function index()
		{
				Flight::render('index/index', array('data' => 'Bob'), 'partial');
				Flight::render('layouts/app', array('title' => 'Bienvenido'));
		}
}

?>