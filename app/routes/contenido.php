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
            'contacto' => array(
                'titulo' => 'Contact Us',
                'subtitulo' => 'Get In Touch',
                'idioma' => 'en',
                'place_holder_nombre' => 'Your name',
                'place_holder_telefono' => 'Your phone',
                'place_holder_asunto' => 'Subject',
                'place_holder_mensaje' => 'Message',
                'texto_boton' => 'Send Message',
                'datos_contacto' => array(
                    'direccion' => array('titulo' => 'Address', 'dato' => 'Mariano Pacheco Street 1073'),
                    'telefono' => array('titulo' => 'Phone Number','dato' => '472-3041'),
                    'correo' => array('titulo' => 'Email', 'dato' => 'jvaldivia@softweb.pe'),
                    'skype' => array('titulo' => 'Toll Free', 'dato' => 'pepe@skype.com'),
                )
            ),
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
            'contacto' => array(
                'titulo' => 'Contacto',
                'subtitulo' => 'Comuníquese con Nostros',
                'idioma' => 'es',
                'place_holder_nombre' => 'Su nombre',
                'place_holder_telefono' => 'Su teléfono',
                'place_holder_asunto' => 'Asunto',
                'place_holder_mensaje' => 'Mensaje',
                'texto_boton' => 'Enviar Mensaje',
                'datos_contacto' => array(
                    'direccion' => array('titulo' => 'Dirección', 'dato' => 'Calle Mariano Pacheco 1073'),
                    'telefono' => array('titulo' => 'telefono', 'dato' => '472-3041'),
                    'correo' => array('titulo' => 'Correo Electrónico', 'dato' => 'jvaldivia@softweb.pe'),
                    'skype' => array('titulo' => 'Llamada grautita', 'dato' => 'pepe@skype.com'),
                )
            ),
        );
        echo json_encode($data);
    }
}

?>
