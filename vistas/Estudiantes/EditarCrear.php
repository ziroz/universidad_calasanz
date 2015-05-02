<input type="hidden" id="per_consecutivoP" name="per_consecutivoP" value="<?php echo $modelo["per_consecutivoP"] ?>"/>
<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <input type="text" class="form-control required" id="per_nombre_completo" name="per_nombre_completo" value="<?php echo $modelo["per_nombre_completo"] ?>" placeholder="Nombre Completo"/>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-lg-6'>
        <div class='form-group'>
            <input type="text" class="form-control required" id="per_identificacion" name="per_identificacion"  value="<?php echo $modelo["per_identificacion"] ?>" placeholder="Identificación"/>
        </div>
    </div>
    <div class='col-lg-6'>
        <div class='form-group'>
            <input type="text" class="form-control required email" id="per_email" name="per_email"  value="<?php echo $modelo["per_email"] ?>" placeholder="Email"/>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-lg-6'>
        <div class='form-group'>
            <div class='input-group date'>                           
                <input type='text' class="form-control required" id="per_fecha_nacimiento"  name="per_fecha_nacimiento"  value="<?php echo $modelo["per_fecha_nacimiento"] ?>" placeholder="Fecha de Nacimiento"/>
                <span class="input-group-addon"><span class="fa fa-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class='col-lg-6'>
        <div class='form-group'>
            <input type="text" class="form-control" id="est_apodo" name="est_apodo"  value="<?php echo $modelo["est_apodo"] ?>" placeholder="Apodo"/>
        </div>
    </div>             
</div>          
<div class='row'>
    <div class='col-lg-6'>
        <div class='form-group'>
            <select class="form-control required" id="est_car_codigo" name="est_car_codigo" title="Seleccione Carrera">
                <option  value="">Seleccione Carrera</option>
                <?php while ($item = mysql_fetch_assoc($programas)) { ?>
                    <option value="<?php echo $item["car_codigoP"] ?>" <?php echo $modelo["est_car_codigo"] == $item["car_codigoP"] ? "selected='selected'" : "" ?>><?php echo $item["car_nombre"] ?></option>   
                <?php } ?>
            </select>
        </div>
    </div>
    <div class='col-lg-6'>
        <div class='form-group'>
            <select class="form-control required" id="est_peri_consecutivo" name="est_peri_consecutivo" title="Seleccione Periodo">
                <option  value="">Seleccione Período</option>
                <?php while ($item = mysql_fetch_assoc($periodos)) { ?>
                    <option value="<?php echo $item["peri_consecutivoP"] ?>" <?php echo $modelo["est_peri_consecutivo"] == $item["peri_consecutivoP"] ? "selected='selected'" : "" ?>><?php echo $item["peri_nombre"] ?></option>   
                <?php } ?>
            </select>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-lg-6'>
        <div class='form-group'>
            <div class='input-group date'>                           
                <input type='text' class="form-control required" id="est_fecha_matricula" name="est_fecha_matricula" value="<?php echo $modelo["est_fecha_matricula"] ?>"/>
                <span class="input-group-addon"><span class="fa fa-calendar"></span>
                </span>
            </div>
        </div>
    </div>
</div>    