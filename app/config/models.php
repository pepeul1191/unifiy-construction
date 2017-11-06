<?php

require_once 'app/config/database.php';

class Permiso extends Model 
{
	public static $_table = 'permisos';
	public static $_connection_name = 'demo';
}

class Rol extends Model 
{
	public static $_table = 'roles';
	public static $_connection_name = 'demo';
}

class RolPermiso extends Model 
{
	public static $_table = 'roles_permisos';
	public static $_connection_name = 'demo';
}

class Sistema extends Model 
{
	public static $_table = 'sistemas';
	public static $_connection_name = 'demo';
}

?>
