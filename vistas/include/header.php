<!DOCTYPE html>
<?php 
$rutaAssest = 'vistas/assets';
?>
<html lang="es-CO">
    <head>
        <title><?php echo $tituloPagina; ?></title>
        <link rel="shortcut icon" href="../vistas/assets/images/favicon.jpg" />
        <meta charset="UTF-8 Unicode">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo $rutaAssest; ?>/libs/bootstrap/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $rutaAssest; ?>/css/style.css">
        <link rel="stylesheet" href="<?php echo $rutaAssest; ?>/libs/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $rutaAssest; ?>/libs/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo $rutaAssest; ?>/libs/date-picker/bootstrap-datetimepicker.css">
        <script type="text/javascript" src="<?php echo $rutaAssest; ?>/libs/jquery/jquery.js"></script>
        <script type="text/javascript" src="<?php echo $rutaAssest; ?>/libs/inputMask/jquery.inputmask.js"></script>
        <script type="text/javascript" src="<?php echo $rutaAssest; ?>/libs/inputMask/jquery.inputmask.numeric.extensions.js"></script>
        <script type="text/javascript" src="<?php echo $rutaAssest; ?>/libs/form-validator/form-validator.js"></script>
        <script type="text/javascript" src="<?php echo $rutaAssest; ?>/libs/bootbox/bootbox.min.js"></script>
        <script type="text/javascript" src="<?php echo $rutaAssest; ?>/libs/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo $rutaAssest; ?>/libs/moment/moment.js"></script>
        <script type="text/javascript" src="<?php echo $rutaAssest; ?>/libs/date-picker/bootstrap-datetimepicker.js"></script>
        <script type="text/javascript" src="<?php echo $rutaAssest; ?>/js/mainJS.js"></script>    
</head>
<body>
    <div id="modal-main" class="modal fade in"></div>
    
    <?php
    if(!isset($sinMenu))
    {
        View::load("include/menu");
    }
    ?>
    <div class='container'> 
        <div class='row'>
            <div class='col-lg-12'>


