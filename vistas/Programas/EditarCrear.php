
<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <?php if (strpos($data["formAction"], 'modificar') === false) { ?>
                <input type="text" id="car_codigoP" name="car_codigoP" class="form-control required" placeholder="Código Carrera" value="<?php echo $modelo['car_codigoP']; ?>" />
            <?php } else { ?>
                <input type="text" class="form-control" disabled="disabled" readonly="readonly"  value="<?php echo $modelo['car_codigoP']; ?>" />
                <input type="hidden" id="car_codigoP" name="car_codigoP" value="<?php echo $modelo['car_codigoP']; ?>" />
            <?php } ?>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <input type="text" id="car_nombre" name="car_nombre" class="form-control required" placeholder="Nombre" value="<?php echo $modelo['car_nombre']; ?>"/>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <input type="text" id="car_valor_semestre" name="car_valor_semestre" class="form-control currency" placeholder="Valor Semestre" value="<?php echo $modelo['car_valor_semestre']; ?>"/>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <input type="text" id="car_numero_semestres" name="car_numero_semestres" class="form-control number" placeholder="Número de Semestres" value="<?php echo $modelo['car_numero_semestres']; ?>"/>
        </div>
    </div>
</div>
