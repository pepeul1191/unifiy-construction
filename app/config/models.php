<?php

require_once 'app/config/database.php';

class Permiso_model extends Model 
{
	public static $_table = 'permisos';
	public static $_connection_name = 'demo';
}

class Rol_model extends Model 
{
	public static $_table = 'roles';
	public static $_connection_name = 'demo';
}

class RolPermiso_model extends Model 
{
	public static $_table = 'roles_permisos';
	public static $_connection_name = 'demo';
}

class Sistema_model extends Model 
{
	public static $_table = 'sistemas';
	public static $_connection_name = 'demo';
}

?>
