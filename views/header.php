<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" 
    />
    <link rel="stylesheet" href="<?= BASE_DIR; ?>css/style.css">
    <link rel="stylesheet" href="<?= BASE_DIR; ?>css/tablet.css">
    <link rel="stylesheet" href="<?= BASE_DIR; ?>css/smartphone.css">
    <title>Practica-POO-PHP</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="<?= BASE_DIR; ?>index.php?controller=Home&action=showHome">Ever-VC | Developer</a>
            </div>
            <ul class="links">
                <li><a href="<?= BASE_DIR; ?>index.php?controller=Home&action=showHome">INCIO</a></li>
                <li><a href="<?= BASE_DIR; ?>index.php?controller=About&action=showAbout">ACERCA DE MI</a></li>
                <li><a href="<?= BASE_DIR; ?>index.php?controller=Contact&action=showContact">CONTACTO</a></li>
                <li><a href="<?= BASE_DIR; ?>index.php?controller=Projects&action=showProjects">PROYECTOS</a></li>
            </ul>
            <a href="https://github.com/Ever-VC" class="action_btn" target="_blank">
                <i class="fa-brands fa-github"></i>
                GitHub
            </a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </nav>
        <div class="dropdown_menu">
            <li><a href="<?= BASE_DIR; ?>index.php?controller=Home&action=showHome">INICIO</a></li>
            <li><a href="<?= BASE_DIR; ?>index.php?controller=About&action=showAbout">ACERCA DE MI</a></li>
            <li><a href="<?= BASE_DIR; ?>index.php?controller=Contact&action=showContact">CONTACTO</a></li>
            <li><a href="<?= BASE_DIR; ?>index.php?controller=Projects&action=showProjects">PROYECTOS</a></li>
            <li><a href="https://github.com/Ever-VC" class="action_btn">GitHub</a></li>
        </div>
    </header>
    
