<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Livretar</title>
        <meta name="description" content="Material da aula de pw">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="<?php echo BASEURL; ?>assets/Livraria.svg" type="image/x-icon">
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/styles.css">
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/awesome/all.min.css">
    </head>
<style>

</style>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-divider mb-4">
            <div class="container-fluid p-3">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mx-auto">
                        <ul class="navbar-nav">
                            <li class="nav-item me-4">
                                <a class="nav-link active d-flex align-items-baseline" href="<?php echo BASEURL; ?>">
                                    <i class="fa-solid fa-house-chimney navicons"></i><h4 class="me-1">Home</h4 class="me-1">
                                </a>
                            </li>
                            <li class="nav-item dropdown me-5">
                                <a class="nav-link dropdown-toggle active d-flex align-items-baseline" href="#"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-swatchbook navicons"></i><h4 class="me-1">Livros</h4 class="me-1">
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo BASEURL; ?>livros/index.php"><i class="fa-solid fa-book navicons"></i> Consultar os Livros</a></li>
                                    <li><a class="dropdown-item" href="<?php echo BASEURL; ?>livros/add.php"><i class="fa-solid fa-address-book navicons"></i> Desapegar dos Livros</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active d-flex align-items-baseline" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-people-roof navicons"></i><h4 class="me-1">Comunidade</h4 class="me-1">
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo BASEURL; ?>customers/index.php"><i class="fa-solid fa-users navicons"></i> Conhecer a Comunidade</a></li>
                                    <li><a class="dropdown-item" href="<?php echo BASEURL; ?>customers/add.php"><i class="fa-solid fa-user-plus navicons"></i> Fazer parte da Comunidade</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <main class="container">