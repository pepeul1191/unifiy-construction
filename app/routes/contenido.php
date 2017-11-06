<?php

class Contenido
{
    public static function demo_espaniol() 
    {
        $data = array(
            'BASE_URL' => BASE_URL,
            'STATIC_URL' => STATIC_URL,
            'mensaje' => false,
            'titulo_pagina' => 'Gestión de Accesos', 
            'modulo' => 'Accesos',
        );
        echo json_encode($data);
    }

    public static function demo_ingles() 
    {
        $data = array(
            'BASE_URL' => BASE_URL,
            'STATIC_URL' => STATIC_URL,
            'mensaje' => false,
            'titulo_pagina' => 'Access Managment', 
            'modulo' => 'Access',
        );
        echo json_encode($data);
    }


    public static function home_ingles() 
    {
        $data = array(
            'BASE_URL' => BASE_URL,
            'STATIC_URL' => STATIC_URL,
            'menu' => array(
                array('url' => '#home', 'nombre' => 'Home'),
                array('url' => '#about', 'nombre' => 'About'),
                array('url' => '#services', 'nombre' => 'Services'),
                array('url' => '#recentProjects', 'nombre' => 'Recent projects'), 
                array('url' => '#testimonials', 'nombre' => 'Testimonials'),
                array('url' => '#gallery', 'nombre' => 'Gallery'),
                array('url' => '#career', 'nombre' => 'Career'),
                array('url' => '#contact', 'nombre' => 'Contact'),
            ), 
            'secciones' => array(
                'home' => 'home',
                'about' => 'about',
                'services' => 'services',
                'recentProjects' => 'recentProjects',
                'testimonials' => 'testimonials',
                'gallery' => 'gallery',
                'career' => 'career',
                'contact' => 'contact',
            ),
            'titulo_pagina' => 'Gestión de Accesos', 
            'modulo' => 'Accesos',
        );
        echo json_encode($data);
    }


    public static function home_espaniol() 
    {
        $data = array(
            'BASE_URL' => BASE_URL,
            'STATIC_URL' => STATIC_URL,
            'menu' => array(
                array('url' => '#home', 'nombre' => 'Home'),
                array('url' => '#nosotros', 'nombre' => 'Nosotros'),
                array('url' => '#servicios', 'nombre' => 'Servicios'),
                array('url' => '#ultimos_proyectos', 'nombre' => 'Últimos proyectos'), 
                array('url' => '#testimoniales', 'nombre' => 'Testimoniales'),
                array('url' => '#galeria', 'nombre' => 'Galería'),
                array('url' => '#carrera', 'nombre' => 'Carrera'),
                array('url' => '#contacto', 'nombre' => 'Contacto'),
            ), 
            'secciones' => array(
                'home' => 'home',
                'about' => 'nosotros',
                'services' => 'servicios',
                'recentProjects' => 'ultimos_proyectos',
                'testimonials' => 'testimoniales',
                'gallery' => 'galeria',
                'career' => 'carrera',
                'contact' => 'contacto',
            ),
            'titulo_pagina' => 'Gestión de Accesos', 
            'modulo' => 'Accesos',
        );
        echo json_encode($data);
    }
}

?>
