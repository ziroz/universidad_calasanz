<?php
$tituloPagina = "Estudiantes";
require '../vistas/include/header.php';
?>

<div class="page-header text-center"><h3>Carreras</h3></div>
<table class="table table-responsive table-striped table-hover" >
    <thead>
        <tr>
            <th>
                Nombre Completo  
            </th>
            <th>
                Fecha Nacimiento
            </th>
            <th>
                Email
            </th>
            <th>
                Apodo
            </th>
            <th>
                Usuario
            </th>
            <th>
                Carrera
            </th>
            <th>
                Periodo
            </th>
            <th>
                Fecha de Matrícula
            </th>                                
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                Steven Ciro
            </td>
            <td>
                09/08/1996
            </td>
            <td>
                jjzapata@gmail.com
            </td>
            <td>
                Ciro
            </td>
            <td>
                Sciro
            </td>
            <td>
                Ingenieria de Sitemas
            </td>
            <td>
                2015-1
            </td>
            <td>
                01/01/2015
            </td>
            <td>
                <a href="EditarCrear.html" class="openModal"> <i class="fa fa-edit"></i> </a>    
                <a href="MatricularMateria.html" class="openModal"> <i class="fa fa-file-text-o"></i> </a> 
                <a href="Eliminar.html" class="openModal"><i class="fa fa-times-circle"></i> </a>
            </td>
        </tr>
        <tr>
            <td>
                Maria Jose Alvares Gomez
            </td>
            <td>
                09/07/1994
            </td>
            <td>
                mjalvares@gmail.com
            </td>
            <td>
                Jose
            </td>
            <td>
                mjalvares
            </td>
            <td>
                Enfermeria
            </td>
            <td>
                2015-1
            </td>
            <td>
                01/01/2015
            </td>
            <td>
                <a href="EditarCrear.html" class="openModal"> <i class="fa fa-edit"></i> </a>    
                <a href="MatricularMateria.html" class="openModal"> <i class="fa fa-file-text-o"></i> </a>
                <a href="Eliminar.html" class="openModal"><i class="fa fa-times-circle"></i> </a>

            </td>
        </tr>
        <tr>
            <td>
                Manuela Rodriguez
            </td>
            <td>
                30/05/1999
            </td>
            <td>
                mrodriguez@gmail.com
            </td>
            <td>
                Manu
            </td>
            <td>
                mrodriguez
            </td>
            <td>
                Arquitectura
            </td>
            <td>
                2015-1
            </td>
            <td>
                01/01/2015
            </td>
            <td>
                <a href="EditarCrear.html" class="openModal"> <i class="fa fa-edit"></i> </a>
                <a href="estudiantes.php?action=materias" class="openModal"> <i class="fa fa-file-text-o"></i> </a>
                <a href="Eliminar.html" class="openModal"><i class="fa fa-times-circle"></i> </a>

            </td>

        </tr>
    </tbody>
</table>
<div class="text-right">                     
    <a href="EditarCrear.html" class="openModal btn btn-primary"> Crear </a>
</div>