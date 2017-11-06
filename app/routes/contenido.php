<?php

class Contenido
{
    public static function demo_espaniol() 
    {
        $data = array(
            'base_url' => BASE_URL,
            'static_url' => STATIC_URL,
            'mensaje' => false,
            'titulo_pagina' => 'Gestión de Accesos', 
            'modulo' => 'Accesos',
        );
        echo json_encode($data);
    }

    public static function demo_ingles() 
    {
        $data = array(
            'base_url' => BASE_URL,
            'static_url' => STATIC_URL,
            'mensaje' => false,
            'titulo_pagina' => 'Access Managment', 
            'modulo' => 'Access',
        );
        echo json_encode($data);
    }


    public static function home_ingles() 
    {
        $data = array(
            'base_url' => BASE_URL,
            'static_url' => STATIC_URL,
            'menu' => array(
                array('url' => '#/es/home', 'nombre' => 'Home'),
                array('url' => '#/es/about', 'nombre' => 'About'),
                array('url' => '#/es/services', 'nombre' => 'Services'),
                array('url' => '#/es/recentProjects', 'nombre' => 'Recent projects'), 
                array('url' => '#/es/testimonials', 'nombre' => 'Testimonials'),
                array('url' => '#/es/gallery', 'nombre' => 'Gallery'),
                array('url' => '#/es/career', 'nombre' => 'Career'),
                array('url' => '#/es/contact', 'nombre' => 'Contact'),
            ), 
            'titulo_pagina' => 'Gestión de Accesos', 
            'modulo' => 'Accesos',
        );
        echo json_encode($data);
    }


    public static function home_espaniol() 
    {
        $data = array(
            'base_url' => BASE_URL,
            'static_url' => STATIC_URL,
            'menu' => array(
                array('url' => '#/en/home', 'nombre' => 'Home'),
                array('url' => '#/en/about', 'nombre' => 'Nosotros'),
                array('url' => '#/en/services', 'nombre' => 'Servicios'),
                array('url' => '#/en/recentProjects', 'nombre' => 'Últimos proeyctos'), 
                array('url' => '#/en/testimonials', 'nombre' => 'Testimoniales'),
                array('url' => '#/en/gallery', 'nombre' => 'Galería'),
                array('url' => '#/en/career', 'nombre' => 'Carrera'),
                array('url' => '#/en/contact', 'nombre' => 'Contacto'),
            ), 
            'titulo_pagina' => 'Gestión de Accesos', 
            'modulo' => 'Accesos',
        );
        echo json_encode($data);
    }
}

?>
