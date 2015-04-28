<div id="main">
    <span data-bind="text: $root.asignatura.hola()"></span>
<table class="table table-responsive table-striped table-hover" >
    <thead>
        <tr>
            <th>
                Nombre Asignatura
            </th>
            <th>
                Semestre
            </th>
            <th class="text-center">
                Corte 1
            </th>
            <th class="text-center">
                Corte 2
            </th>
            <th class="text-center">
                Corte 3
            </th>
            <th class="text-center">
                Final
            </th>                                                     
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                Algebra
            </td>
            <td>
                I
            </td>
            <td>

            </td>
            <td>

            </td>
            <td>

            </td> 
            <td>

            </td>
            <td>
                <a class="openModal"  > Matricular <i class="fa fa-file-text-o"></i> </a>  
            </td>
        </tr>
        <tr>
            <td>
                Calculo I
            </td>
            <td>
                I
            </td>
            <td>
                <input type="text" class="form-control" placeholder="5" data-bind="value: $root.asignatura "/>
            </td>
            <td>
                <input type="text" class="form-control" placeholder="5" disabled= "disabled"/>
            </td>
            <td>
                <input type="text" class="form-control" placeholder="5" disabled= "disabled"/>
            </td>
            <td>
                <input type="text" class="form-control" placeholder="5" disabled= "disabled" />
            </td>
            <td>

            </td>
        </tr>
        <tr>
            <td>
                Matematicas
            </td>
            <td>
                II
            </td>
            <td>
                <input type="text" class="form-control" />
            </td>
            <td>
                <input type="text" class="form-control" />
            </td>
            <td>
                <input type="text" class="form-control" />
            </td>  
            <td>

            </td>
            <td>                                    
            </td>
        </tr>
    </tbody>
</table>
</div>
<script>
    fici.evaluacion.initModel(<?php echo json_encode([ "hola" => 0 ]) ?>);
</script>
