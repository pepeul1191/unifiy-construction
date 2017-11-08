<?php

class Home
{
		public static function index()
		{
				Flight::render('home/index', array('data' => 'Bodb'));
		}

		public static function dist()
		{
				Flight::render('home/dist', array('data' => 'Bodb'));
		}
}

?>