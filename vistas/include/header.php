<!DOCTYPE html>
<html lang="es-CO">
    <head>
        <title><?php echo $tituloPagina; ?></title>
        <link rel="shortcut icon" href="../vistas/assets/images/favicon.jpg" />
        <meta charset="UTF-8 Unicode">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            View::initAssets("style.css"); 
            View::initAssets("bootstrap.min.css"); 
            View::initAssets("font-awesome.css"); 
            View::initAssets("bootstrap-datetimepicker.css");
            
            View::initAssets("jquery.js");
//            View::initAssets("knockout.js");
//            View::initAssets("knockout.mapping.js");
            View::initAssets("jquery.inputmask.js");
            View::initAssets("jquery.inputmask.numeric.extensions.js");
            View::initAssets("form-validator.js");
            View::initAssets("bootbox.min.js");
            View::initAssets("bootstrap.min.js");
            View::initAssets("moment.js");
            View::initAssets("bootstrap-datetimepicker.js");
            View::initAssets("mainJS.js");
//            View::initAssets("evaluacion.js");

        ?>
    </head>
    <body>
        <div id="modal-main" class="modal fade in"></div>
        <?php
        require 'menu.php';
        ?>
        <div class='container'> 
            <div class='row'>
                <div class='col-lg-12'>


