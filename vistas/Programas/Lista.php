<?php
    $tituloPagina = "Carreras";
    require '../vistas/include/header.php';
?>

<div class="page-header text-center"><h3>Carreras</h3></div>
<table class="table table-responsive table-striped table-hover" >
    <thead>
        <tr>
            <th>
                Código  
            </th>
            <th>
                Nombre
            </th>
            <th>Valor Semestre</th>
            <th>N° semestres</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                001 
            </td>
            <td>
                Enfermeria
            </td>
            <td>$60000</td>
            <td>12</td>

            <td>
                <a href="EditarCrear.html" class="openModal"> <i class="fa fa-edit"></i>Editar </a>                             
                <a href="Eliminar.html" class="openModal"><i class="fa fa-times-circle"></i>Eliminar </a>
                <a href="CrearMateriaPensum.html" class="openModal"> <i class="fa fa-file-text-o"></i>Agregar Materia</a>                             
                <a href="MateriasCarrera.html" class="openModal"><i class="fa fa-tasks"></i>Pensum </a>
            </td>
        </tr>
        <tr>
            <td>
                006
            </td>
            <td>
                Sistemas
            </td>
            <td>
                $120000
            </td>
            <td>8</td>
            <td>
                <a href="programas.php?action=editar" class="openModal"> <i class="fa fa-edit"></i>Editar </a>                             
                <a href="programas.php?action=eliminar" class="openModal"><i class="fa fa-times-circle"></i>Eliminar </a>
                <a href="programas.php?action=crearpensum" class="openModal"> <i class="fa fa-file-text-o"></i>Agregar Materia</a>                             
                <a href="programas.php?action=pensum" class="openModal"><i class="fa fa-tasks"></i>Pensum </a>
            </td>
        </tr>
    </tbody>
</table>
<div class="text-right">                     
    <a href="programas.php?action=crear" class="openModal btn btn-primary"> Crear </a>
</div>

<?php
require '../vistas/include/footer.php';
?>