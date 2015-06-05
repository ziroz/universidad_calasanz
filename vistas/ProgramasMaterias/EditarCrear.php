
<input type="hidden" id="carmat_car_codigo" name="carmat_car_codigo" value="<?php echo $id; ?>"/>
<div class='row'>
    <div class='col-lg-6'>
        <div class='form-group'>
            <select id="carmat_mat_codigo" name="carmat_mat_codigo" class="form-control required">
                <option  value="">Seleccione Materia</option>
                <?php foreach ($materias as $key => $value) {
                    ?>
                    <option value="<?php echo $value["mat_codigoP"]; ?>"><?php echo $value["mat_nombre"]; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class='col-lg-6'>
        <div class='form-group'>
            <input type="text" id="carmat_ciclo" name="carmat_ciclo" class="form-control required" placeholder="Ciclo" />
        </div>
    </div>
</div>

<div class='row'>
    <div id="materias" class='col-lg-12'>
    </div>
</div>


<script>
    var url = '<?php echo Url::getUrl("ProgramasMaterias", "Listar", ['id' => $id]); ?>';
    function actualizarMaterias() {
        $("#materias").load(url);
    }
    actualizarMaterias();

    $("#formModal").on('click','.deleteMateria', function (e) {
        var $this = $(this);
        $.ajax({
            url: $this.attr("href"),
            type: 'post',
            success: function (data) {
                actualizarMaterias();
            }
        });
        e.preventDefault();
    });

    $("#formModal").on('submit', function (e) {
        var form = $(this);
        
        $.ajax({
            url: form.attr("action"),
            data: form.serializeArray(),
            type: 'post',
            dataType: "json",
            success: function (data) {
                actualizarMaterias();
            }
        });

        e.preventDefault();
    });
</script>