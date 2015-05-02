<input type="hidden" id="per_consecutivoP" name="per_consecutivoP" value="<?php echo $modelo["per_consecutivoP"]; ?>"/>
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
            <input type="text" class="form-control required" id="per_identificacion" name="per_identificacion" value="<?php echo $modelo["per_identificacion"] ?>" placeholder="Identificación"/>
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
                <input type='text' class="form-control required" id="per_fecha_nacimiento" name="per_fecha_nacimiento" value="<?php echo $modelo["per_fecha_nacimiento"] ?>" placeholder="Fecha de Nacimiento" />
                <span class="input-group-addon"><span class="fa fa-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class='col-lg-6'>
        <div class='form-group'>
            <input type="text" class="form-control required" id="doc_oficina" name="doc_oficina" value="<?php echo $modelo["doc_oficina"] ?>" placeholder="Oficina"/>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-lg-6'>
        <div class='form-group'>
            <input type="text" class="form-control" id="doc_telefono_oficina" name="doc_telefono_oficina" value="<?php echo $modelo["doc_telefono_oficina"] ?>" placeholder="Teléfono Oficina"/>
        </div>
    </div>
    <div class='col-lg-6'>
        <div class='form-group'>
            <input type="text" class="form-control" id="doc_categoria" name="doc_categoria" value="<?php echo $modelo["doc_categoria"] ?>" placeholder="Categoria"/>
        </div>
    </div>   
</div>          
<div class='row'>       
    <div class='col-lg-6'>
        <div class='form-group'>
            <input type="text" class="form-control required currency" id="doc_valor_hora" name="doc_valor_hora" value="<?php echo $modelo["doc_valor_hora"] ?>" placeholder="Valor Hora"/>
        </div>
    </div>
</div>