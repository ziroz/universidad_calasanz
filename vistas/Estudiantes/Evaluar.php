
<table class="table table-responsive table-striped table-hover">
    <thead>
        <tr>
            <th>Materia</th>
            <th>Periodo</th>
            <th class="text-center" style="width: 80px;">Corte 1</th>
            <th class="text-center" style="width: 80px;">Corte 2</th>
            <th class="text-center" style="width: 80px;">Corte 3</th>
            <th class="text-center">Promedio</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($matriculas as $key => $materia) { ?>
            <tr>
                <td><?php echo $materia["mat_nombre"] ?></td>
                <td><?php echo $materia["peri_nombre"] ?></td>
                <td>
                    <div id="nota1_<?php echo $materia["matmat_consecutivoP"]; ?>" class="text-center">
                        <span><?php echo $materia["matmat_eva_nota_corte_1"] ?></span>
                        <a href="#" class="editarNota" style="margin-left: 4px;" data-nota='1' data-id='<?php echo $materia["matmat_consecutivoP"]; ?>'><i class="fa fa-pencil"></i></a>
                    </div>
                    <div id="nota1_<?php echo $materia["matmat_consecutivoP"]; ?>_edit" style="display:none;min-height: 35px;">
                        <div class="pull-right" style="width: 15px;margin-top: -1px;line-height: 1.3;">
                            <a href="#" class="submitNota" data-nota='1' data-id='<?php echo $materia["matmat_consecutivoP"]; ?>'><i class="fa fa-check"></i></a>
                            <a href="#" class="cancelNota" data-nota='1' data-id='<?php echo $materia["matmat_consecutivoP"]; ?>'><i class="fa fa-times"></i></a>
                        </div>
                        <div style="padding-right: 22px;">
                        <input type="text" class="form-control text-center"/>
                        </div>
                    </div>
                </td>
                <td>
                    <div id="nota2_<?php echo $materia["matmat_consecutivoP"]; ?>" class="text-center">
                        <span><?php echo $materia["matmat_eva_nota_corte_2"] ?></span>
                        <a href="#" class="editarNota" style="margin-left: 4px;" data-nota='2' data-id='<?php echo $materia["matmat_consecutivoP"]; ?>'><i class="fa fa-pencil"></i></a>
                    </div>
                    <div id="nota2_<?php echo $materia["matmat_consecutivoP"]; ?>_edit" style="display:none;min-height: 35px;">
                        <div class="pull-right" style="width: 15px;margin-top: -1px;line-height: 1.3;">
                            <a href="#" class="submitNota" data-nota='2' data-id='<?php echo $materia["matmat_consecutivoP"]; ?>'><i class="fa fa-check"></i></a>
                            <a href="#" class="cancelNota" data-nota='2' data-id='<?php echo $materia["matmat_consecutivoP"]; ?>'><i class="fa fa-times"></i></a>
                        </div>
                        <div style="padding-right: 22px;">
                        <input type="text" class="form-control text-center"/>
                        </div>
                    </div>
                </td>
                <td>
                     <div id="nota3_<?php echo $materia["matmat_consecutivoP"]; ?>" class="text-center">
                        <span><?php echo $materia["matmat_eva_nota_corte_3"] ?></span>
                        <a href="#" class="editarNota" style="margin-left: 4px;" data-nota='3' data-id='<?php echo $materia["matmat_consecutivoP"]; ?>'><i class="fa fa-pencil"></i></a>
                    </div>
                    <div id="nota3_<?php echo $materia["matmat_consecutivoP"]; ?>_edit" style="display:none;min-height: 35px;">
                        <div class="pull-right" style="width: 15px;margin-top: -1px;line-height: 1.3;">
                            <a href="#" class="submitNota" data-nota='3' data-id='<?php echo $materia["matmat_consecutivoP"]; ?>'><i class="fa fa-check"></i></a>
                            <a href="#" class="cancelNota" data-nota='3' data-id='<?php echo $materia["matmat_consecutivoP"]; ?>'><i class="fa fa-times"></i></a>
                        </div>
                        <div style="padding-right: 22px;">
                        <input type="text" class="form-control text-center"/>
                        </div>
                    </div>
                </td>
                <td id="promedio_<?php echo $materia["matmat_consecutivoP"]; ?>" class="text-center"><?php echo $materia["matmat_nota_final"] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<script>

    var estudiante = '<?php echo $id; ?>';
var urlGuardar = '<?php echo Url::getUrl("estudiantes", "evaluar"); ?>';
    $(".editarNota").on("click", function (e) {

        $(".cancelNota").trigger("click");

        var index = $(this).data("nota");
        var id = $(this).data("id");

        $("#nota" + index + "_" + id + "_edit").find("input").val($(this).prev().html());

        $("#nota" + index + "_" + id).hide();
        $("#nota" + index + "_" + id + "_edit").show();

        e.preventDefault();
    });


    $(".cancelNota").on("click", function (e) {
        var index = $(this).data("nota");
        var id = $(this).data("id");

        $("#nota" + index + "_" + id).show();
        $("#nota" + index + "_" + id + "_edit").hide();

        e.preventDefault();
    });


    $(".submitNota").on("click", function (e) {
        var index = $(this).data("nota");
        var id = $(this).data("id");
        var valor = $("#nota" + index + "_" + id + "_edit").find("input").val();
        $.ajax({
            url: urlGuardar,
            data: {index: index, matmat_consecutivoP: id, valor: valor},
            type: 'Post',
            dataType: "json",
            success: function (data) {

                $("#nota" + index + "_" + id).find("span").html(valor);
                $("#nota" + index + "_" + id).show();
                $("#nota" + index + "_" + id + "_edit").hide();
                
                $("#promedio_" + id).html(data);
                $("#final_" + id).html(data);
            }
        });

        e.preventDefault();
    });

</script>
