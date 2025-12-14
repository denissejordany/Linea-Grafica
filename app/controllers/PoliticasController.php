<?php

class PoliticasController{
    public function showPolicies()
    {
         $title = 'Politicas';
        $pageStyles = [
            'global/header.css',
            'pages/politicas.css',
            'global/footer.css'
        ];

        require_once "app/views/layouts/header.php";
        require_once "app/views/politicas.php";
        require_once "app/views/layouts/footer.php";
    }
}
