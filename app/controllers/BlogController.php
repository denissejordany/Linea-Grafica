<?php

class BlogController 
{
    public function showBlog()
    {
         $title = 'Blog';
        $pageStyles = [
            'global/header.css',
            'pages/blog.css',
            'global/footer.css'
        ];

        require_once "app/views/layouts/header.php";
        require_once "app/views/blog.php";
        require_once "app/views/layouts/footer.php";
    }
}
