<!DOCTYPE html>
<html lang="es-CO">
    <head>
        <title><?php echo $tituloPagina; ?></title>
        <link rel="shortcut icon" href="../vistas/assets/images/favicon.jpg" />
        <meta charset="UTF-8 Unicode">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../vistas/assets/css/style.css"/>
        <link rel="stylesheet" href="../vistas/assets/libs/bootstrap/bootstrap.min.css"/>
        <link rel="stylesheet" href="../vistas/assets/libs/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="../vistas/assets/libs/date-picker/bootstrap-datetimepicker.css" />

        <script type="text/javascript" src="../vistas/assets/libs/jquery/jquery.js"></script>
        <script type="text/javascript" src="../vistas/assets/libs/knockout/knockout.js"></script>
        <script type="text/javascript" src="../vistas/assets/libs/knockout/knockout.mapping.js"></script>
        <script type="text/javascript" src="../vistas/assets/libs/inputMask/jquery.inputmask.js"></script>
        <script type="text/javascript" src="../vistas/assets/libs/inputMask/jquery.inputmask.numeric.extensions.js"></script>
        <script type="text/javascript" src="../vistas/assets/libs/form-validator/form-validator.js"></script>
        <script type="text/javascript" src="../vistas/assets/libs/bootbox/bootbox.min.js"></script>
        <script type="text/javascript" src="../vistas/assets/libs/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="../vistas/assets/libs/moment/moment.js"></script>
        <script type="text/javascript" src="../vistas/assets/libs/date-picker/bootstrap-datetimepicker.js"></script>
        <script type="text/javascript" src="../vistas/assets/js/mainJS.js"></script>
        <script type="text/javascript" src="../vistas/assets/js/evaluacion.js"></script>
    </head>
    <body>
        <div id="modal-main" class="modal fade in"></div>
        <?php
        require 'menu.php';
        ?>
        <div class='container'> 
            <div class='row'>
                <div class='col-lg-12'>


