<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title . ' | Linea Grafica' : 'Mi sitio'; ?></title>

    <?php if (!empty($pageStyles)): ?>
        <?php foreach ($pageStyles as $css): ?>
            <link rel="stylesheet" href="<?= Routes::css($css); ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
    
<?php 
    $current = strtolower($title ?? '');
?>
<header class="header">
    <div class="container">

        <div class="logo">
            <a href="<?php echo Routes::url('inicio'); ?>">
                <img src="<?php echo Routes::img('header/logo.png'); ?>" alt="Logo">
            </a>
        </div>
    </div>
</header>