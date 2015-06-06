<?php
$data['tituloPagina'] = "Estudiantes";
View::load("include/header",$data);
?>
<div class="page-header text-center"><h3>Estudiantes</h3></div>

<div class='row'>
    <div class='col-lg-4 col-md-4'>
        <select id="carmat_mat_codigo" name="carmat_mat_codigo" class="form-control required">
            <option  value="">Seleccione Materia</option>
            <?php foreach ($materias as $key => $value) {
                ?>
                <option value="<?php echo $value["matmat_mat_codigo"]; ?>"><?php echo $value["mat_nombre"]; ?></option>
            <?php } ?>
        </select>
    </div>
</div>

<div class='row'>
    <div id="estudiantes" class='col-lg-12' style="padding-top: 15px;">
    </div>
</div>

<?php
View::load("include/footer")
?>

<script>
    $(document).ready(function () {
        var url = '<?php echo Url::getUrl("estudiantes", "listaPorMateria", ['materia'=>'-id-']) ?>'
        $("#carmat_mat_codigo").on('change',function(e){
            $("#estudiantes").load(url.replace('-id-',$(this).val()));
        });
    });
</script>