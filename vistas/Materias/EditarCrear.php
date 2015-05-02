
<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <?php if (strpos($data["formAction"], 'modificar') === false) { ?>
                <input type="text" id="mat_codigoP" name="mat_codigoP" class="form-control required" placeholder="Código Materia" value="<?php echo $modelo['mat_codigoP']; ?>" />
            <?php } else { ?>
                <input type="text" class="form-control" disabled="disabled" readonly="readonly"  value="<?php echo $modelo['mat_codigoP']; ?>" />
                <input type="hidden" id="mat_codigoP" name="mat_codigoP" value="<?php echo $modelo['mat_codigoP']; ?>" />
            <?php } ?>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <input type="text" id="mat_nombre" name="mat_nombre" class="form-control required" placeholder="Nombre" value="<?php echo $modelo['mat_nombre']; ?>"/>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <input type="text" id="mat_valor_semestre" name="mat_descripcion" class="form-control required" placeholder="Descripción" value="<?php echo $modelo['mat_descripcion']; ?>"/>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <input type="text" id="mat_numero_semestres" name="mat_cupos_maximo" class="form-control number" placeholder="Cupo Máximo" value="<?php echo $modelo['mat_cupos_maximo']; ?>"/>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <input type="text" id="mat_numero_semestres" name="mat_horas_semanales" class="form-control number" placeholder="Horas Semanales" value="<?php echo $modelo['mat_horas_semanales']; ?>"/>
        </div>
    </div>
</div>