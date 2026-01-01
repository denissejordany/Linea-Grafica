<?php

class HomeController 
{
    public function showHome()
    {
         $title = 'Inicio';
        $pageStyles = [
                       
            'global/reset.css',         
            'global/header.css',
            'global/footer.css',
            'pages/inicio.css',
        ];

        require_once "app/views/layouts/header.php";
        require_once "app/views/inicio.php";
        require_once "app/views/layouts/footer.php";
    }
}
