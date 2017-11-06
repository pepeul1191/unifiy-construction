<?php

class Home
{
		public static function index()
		{
				Flight::render('home/index', array('data' => 'Bodb'));
		}
}

?>