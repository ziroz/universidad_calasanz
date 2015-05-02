<input type="hidden" id="matmat_per_consecutivo" name="matmat_per_consecutivo" value="<?php echo $modelo["matmat_per_consecutivo"] ?>"/>
<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <select class="form-control required" id="matmat_mat_codigo" name="matmat_mat_codigo" title="Seleccione Materia">
                <option  value="">Seleccione Materia</option>
                <?php while ($item = mysql_fetch_assoc($materias)) { ?>
                    <option value="<?php echo $item["mat_codigoP"] ?>"><?php echo $item["mat_nombre"] ?></option>   
                <?php } ?>
            </select>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <select class="form-control required" id="matmat_peri_consecutivo" name="matmat_peri_consecutivo" title="Seleccione Periodo">
                <option value="">Seleccione Período</option>
                <?php while ($item = mysql_fetch_assoc($periodos)) { ?>
                    <option value="<?php echo $item["peri_consecutivoP"] ?>"><?php echo $item["peri_nombre"] ?></option>   
                <?php } ?>
            </select>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <select class="form-control" id="matmat_per_consecutivo_docente" name="matmat_per_consecutivo_docente" title="Seleccione Docente">
                <option value="NULL">Seleccione Docente</option>
                <?php while ($item = mysql_fetch_assoc($periodos)) { ?>
                    <option value="<?php echo $item["doc_per_consecutivoP"] ?>"><?php echo $item["per_nombre_completo"] ?></option>   
                <?php } ?>
            </select>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-lg-12'>
        <div class='form-group'>
            <input type="text" class="form-control" id="matmat_aula" name="matmat_aula" placeholder="Aula"/>
        </div>
    </div>
</div>