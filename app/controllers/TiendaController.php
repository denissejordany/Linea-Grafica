<?php
//app/controllers/TiendaController.php

class TiendaController 
{
    public function showStore()
    {
         $title = 'Tienda';
        $pageStyles = [

            'global/reset.css',
            'global/typography.css',
            'global/header.css',
            'pages/tienda/tienda.css',
            'pages/tienda/tienda-contenedor.css',
            'pages/tienda/tienda-carruselRes.css',
            'pages/tienda/tienda-contacto.css',
            'pages/tienda/tienda-encuentranos.css',
            'global/footer.css'
        ];

        require_once "app/views/layouts/header.php";
        require_once "app/views/tienda.php";
        require_once "app/views/layouts/footer_tienda.php";
    }
}
