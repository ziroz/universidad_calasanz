<div class="modal-dialog modal-small">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><?php echo $data['tituloModal']; ?></h4>
        </div>
        <form id="formModal" action="<?php echo $data['formAction']; ?>" method="post">
            <div class="modal-body">
                <?php require $data['modalBody'];?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <input type="submit" class="btn btn-primary" value="Guardar"/>
            </div>
        </form>
    </div>
</div>