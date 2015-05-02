<input type="hidden" id="peri_consecutivoP" name="peri_consecutivoP" class="form-control" placeholder="Código Periodo" value="<?php echo $modelo['peri_consecutivoP']; ?>" />

<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <input type="text" id="peri_nombre" name="peri_nombre" class="form-control required" placeholder="Nombre" value="<?php echo $modelo['peri_nombre']; ?>"/>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <div class='input-group date'>
                <input type='text' class="form-control required" id="peri_fecha_inicio" name="peri_fecha_inicio" value="<?php echo $modelo['peri_fecha_inicio']; ?>" placeholder="Fecha Inicio"/>
                <span class="input-group-addon"><i class="fa fa-calendar"></i>
                </span>
            </div>  
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
              <div class='input-group date'>
                <input type='text' class="form-control required" id="peri_fecha_fin" name="peri_fecha_fin" value="<?php echo $modelo['peri_fecha_fin']; ?>" placeholder="Fecha Fin"/>
                <span class="input-group-addon"><i class="fa fa-calendar"></i>
                </span>
            </div>  
        </div>
    </div>
</div>