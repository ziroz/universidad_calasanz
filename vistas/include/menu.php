
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">U.  Calazans</a> 
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php  ?>
                <li><a href="<?php echo Url::getUrl("programas", "index"); ?>">Carreras</a></li>
                <li><a href="<?php echo Url::getUrl("periodos", "index"); ?>">Períodos</a></li>
                <li><a href="<?php echo Url::getUrl("materias", "index"); ?>">Materias</a></li>
                <li><a href="<?php echo Url::getUrl("docentes", "index"); ?>">Docentes</a></li>
                <li><a href="<?php echo Url::getUrl("estudiantes", "index"); ?>">Estudiantes</a></li>
                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>-->
            </ul>
            <form id="cerrarSesion" action="<?php echo Url::getUrl("Seguridad", "close"); ?>" method="post"></form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ><?php echo Session::getUser()['per_nombre_completo'] ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#" class="closeSesion">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
