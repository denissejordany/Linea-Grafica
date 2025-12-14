<?php

class HomeController 
{
    public function showHome()
    {
         $title = 'Inicio';
        $pageStyles = [
            
            'pages/inicio.css',
            'global/header.css',
            'global/footer.css'
        ];

        require_once "app/views/layouts/header.php";
        require_once "app/views/inicio.php";
        require_once "app/views/layouts/footer.php";
    }
}
