<?php
$data['tituloPagina'] = "Iniciar sesión";
$data['sinMenu'] = 'true';
View::load("include/header", $data);
?>
<form action="<?php echo Url::getUrl("Seguridad", "Login"); ?>" method="post" class="form-signin">
    <?php if(isset($returnUrl)){ ?>
    <input type="hidden" name="returnUrl" value="<?php echo $returnUrl; ?>"/>
    <?php } ?>
    <h2 class="form-signin-heading">Iniciar Sesion</h2>
    <input type="text" class="form-control" name="per_usu_nombre" placeholder="Usuario">
    <input type="password" class="form-control" name="per_usu_contrasena" placeholder="Contraseña">
    <label class="checkbox">
        <input type="checkbox" value="remember-me"> Mantener sesión iniciada
    </label>
    <button class="btn btn-large btn-primary" type="submit">Iniciar</button>
</form>

<style type="text/css">
    body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

    .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
        box-shadow: 0 1px 2px rgba(0,0,0,.05);
    }
    .form-signin .form-signin-heading,
    .form-signin .checkbox {
        margin-bottom: 10px;
    }

    .form-signin input[type='text'] {
        margin-bottom: 10px;
    }
    .form-signin h2{
        font-weight: bold;
    }

</style>
<?php
View::load("include/footer")
?>