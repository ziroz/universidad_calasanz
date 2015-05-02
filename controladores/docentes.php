<?php

require '../modelo/conexion.php';

if (isset($_GET['action'])) {
    $action = $_GET["action"];
    $isPost = $_SERVER['REQUEST_METHOD'] === 'POST';

    if ($action == "ingresar") {

        if ($isPost) {
            docentesM::ingresar($_POST);

            header('Location:docentes.php');
        } else {

            $data['modalBody'] = '../vistas/Docentes/EditarCrear.php';
            $data['formAction'] = 'docentes.php?action=ingresar';
            $data['tituloModal'] = 'Crear Docente';

            $modelo = [
                "per_consecutivoP" => "",
                "per_nombre_completo" => "",
                "per_identificacion" => "",
                "per_fecha_nacimiento" => "",
                "per_email" => "",
                "doc_oficina" => "",
                "doc_telefono_oficina" => "",
                "doc_categoria" => "",
                "doc_valor_hora" => "",
            ];

            require '../vistas/include/modal.php';
        }
    } else
    if ($action == "modificar") {
        if ($isPost) {

            docentesM::modificar($_POST);

            header('Location:docentes.php');
        } else {

            $data['modalBody'] = '../vistas/Docentes/EditarCrear.php';
            $data['formAction'] = 'docentes.php?action=modificar';
            $data['tituloModal'] = 'Modificar Docente';

            $modelo = docentesM::detalleRetornar($_GET["id"]);

            require '../vistas/include/modal.php';
        }
    } else
    if ($action == "eliminar") {

        docentesM::eliminar($_GET["id"]);

        header('Location:docente.php');
    }
} else {
    $datos = docentesM::retornar();
    require '../vistas/Docentes/Lista.php';
}
?>
