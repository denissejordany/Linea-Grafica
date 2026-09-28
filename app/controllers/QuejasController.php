<?php

class QuejasController{
    public function showQuejas()
    {
        $title = 'Quejas y sugerencias';
        $pageStyles = [
            'global/header.css',
            'pages/quejas.css',
            'global/footer_politicas.css'
        ];

        require_once "app/views/layouts/header_politicas.php";
        require_once "app/views/quejas.php";
        require_once "app/views/layouts/footer_politicas.php";
    }
}
