
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        <!-- cmoentario-->
        <button class="menu-btn" id="menuBtn">
            <img 
                id="menu-icon"
                src="<?php echo Routes::img('header/menu_icon.png'); ?>"
                data-close="<?php echo Routes::img('header/close_icon.png'); ?>"
                data-open="<?php echo Routes::img('header/menu_icon.png'); ?>"
                alt="menu">
        </button>

        <nav class="nav" id="navMenu">
            <a class="nav-item <?php echo ($current === 'inicio') ? 'active' : '' ?>"
               href="<?php echo Routes::url('inicio'); ?>">
                INICIO
            </a>

            <a class="nav-item <?php echo ($current === 'tienda') ? 'active' : '' ?>"
               href="<?php echo Routes::url('tienda'); ?>">
                TIENDA
            </a>

            <a class="nav-item <?php echo ($current === 'blog') ? 'active' : '' ?>"
               href="<?php echo Routes::url('blog'); ?>">
                BLOG
            </a>
        </nav>

    </div>
</header>

<main>
