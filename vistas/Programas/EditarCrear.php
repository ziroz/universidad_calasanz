
<?php 
    $tituloModal = "Crear Carrera";
    require '../include/modalOpen.php';
?>

<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <input type="text" id="codigo" class="form-control" placeholder="Código Carrera"/>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <input type="text" class="form-control" placeholder="Nombre Completo"/>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <input type="text" id="nombre" class="form-control" placeholder="Nombre"/>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <input type="text" id="valor" class="form-control" placeholder="Valor Semestre"/>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <input type="text" id="numero" class="form-control" placeholder="Número de Semestress"/>
        </div>
    </div>
</div>

<?php 
    require '../include/modalClose.php';
?>