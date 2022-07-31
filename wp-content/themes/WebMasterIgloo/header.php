<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  wp_head() ?>
</head>
<body>
    
<header>
    <div class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?php echo get_template_directory_uri()?> /assets/Multimedia/image/logo-nav.png" alt="logo-nav" class="logo-nav">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="info-nav slice-lg mt-4 mb-2">
        <h1>¿Sabes que es la <span>Multimedia</span> ?</h1>

        <div class="info-parrafo-nav mt-4">
            <p> ¡Sabes que la <span>Multimedia</span> 
                 puede ser empleada en los equipos analógicos, 
                 digitales y en los dispositivos de almacenamiento!.
            </p>
        </div>
    </div>
</header>