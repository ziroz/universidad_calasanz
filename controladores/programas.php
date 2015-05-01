

<?php
require '../modelo/conexion.php';


if (isset($_GET['action'])) {
    $action = $_GET["action"];
    $isPost = $_SERVER['REQUEST_METHOD'] === 'POST';
    
    if ($action == "ingresar") {

        if ($isPost) {
            programasM::ingresar($_POST);

            header('Location:programas.php');
        } else {

            $data['modalBody'] = '../vistas/Programas/EditarCrear.php';
            $data['formAction'] = 'programas.php?action=ingresar';
            $data['tituloModal'] = 'Crear Carrera';

            $modelo = [
                "car_codigoP" => "",
                "car_nombre" => "",
                "car_valor_semestre" => "",
                "car_numero_semestres" => ""
            ];

            require '../vistas/include/modal.php';
        }
    } else
    if ($action == "modificar") {
        if ($isPost) {

            programasM::modificar($_POST);

            header('Location:programas.php');
        } else {

            $data['modalBody'] = '../vistas/Programas/EditarCrear.php';
            $data['formAction'] = 'programas.php?action=modificar';
            $data['tituloModal'] = 'Modificar Carrera';
            
            $modelo = programasM::detalleRetornar($_GET["id"]);

            require '../vistas/include/modal.php';
        }
    } else
    if ($action == "pensum") {

        $data['modalBody'] = '../vistas/Programas/MateriasCarrera';
        $data['tituloModal'] = 'Pensum';

        require '../vistas/include/modalSimple.php';
    } else
    if ($action == "eliminar") {
        
        programasM::eliminar($_GET["id"]);
        header('Location:programas.php');
    } else
    if ($action == "crearpensum") {

        $data['modalBody'] = '../vistas/Programas/CrearMateriaPensum.php';
        $data['formAction'] = 'programas.php?action=crearpensum';
        $data['tituloModal'] = 'Agregar Materia Pensum';

        require '../vistas/include/modal.php';
    }
} else {
    $datos = programasM::retornar();
    require '../vistas/Programas/Lista.php';
}
?>
