<?php
//app/controllers/TiendaController.php

class TiendaController 
{
    public function showStore()
    {
         $title = 'Tienda';
        $pageStyles = [
            'global/header.css',
            'pages/tienda.css',
            'global/footer_tienda.css'
        ];

        require_once "app/views/layouts/header.php";
        require_once "app/views/tienda.php";
        require_once "app/views/layouts/footer_tienda.php";
    }
}
