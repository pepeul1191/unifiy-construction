<?php

class Contenido
{
    public static function espaniol() 
    {
        $data = array(
            'base_url' => BASE_URL,
            'static_url' => STATIC_URL,
            'mensaje' => false,
            'titulo_pagina' => 'Gestión de Accesos', 
            'modulo' => 'Accesos',
            'title' => 'Inicio', 
            'css' => 'dist/accesos.min.css',
            'js_top' => 'http://localhost:3000/',
            'menu' => '[{"url" : "accesos", "nombre" : "Accesos"},{"url" : "libros", "nombre" : "Libros"}]', 
            'items' => '[{"subtitulo":"","items":[{"item":"Gestión de Sistemas","url":"accesos/#/sistema"},{"item":"Gestión de Usuarios","url":"accesos/#/usuario"}]}]', 
            'data' => json_encode(array(
                'mensaje' => false,
                'titulo_pagina' => 'Gestión de Accesos', 
                'modulo' => 'Accesos'
            )),
        );
        echo json_encode($data);
    }

    public static function ingles() 
    {
        $data = array(
            'base_url' => BASE_URL,
            'static_url' => STATIC_URL,
            'mensaje' => false,
            'titulo_pagina' => 'Access Managment', 
            'modulo' => 'Access',
            'title' => 'Home', 
            'css' => 'dist/accesos.min.css',
            'js_top' => 'http://localhost:3000/',
            'menu' => '[{"url" : "accesos", "nombre" : "Accesos"},{"url" : "libros", "nombre" : "Libros"}]', 
            'items' => '[{"subtitulo":"","items":[{"item":"Gestión de Sistemas","url":"accesos/#/sistema"},{"item":"Gestión de Usuarios","url":"accesos/#/usuario"}]}]', 
            'data' => json_encode(array(
                'mensaje' => false,
                'titulo_pagina' => 'Access Managment', 
                'modulo' => 'Accesos'
            )),
        );
        echo json_encode($data);
    }

}

?>