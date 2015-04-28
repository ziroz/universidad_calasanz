<?php

if (isset($_GET['action'])) {
    $action = $_GET["action"];

    if ($action == "crear") {
        $isPost = count($_POST) > 0;
        if ($isPost) {
            echo '<pre>';
            var_dump($_POST);
            echo '</pre>';
            exit();
            header('Location:programas.php');
        } else {
            $modalBody = '../vistas/Programas/EditarCrear.php';
            $formAction = 'programas.php?action=crear';
            $tituloModal = 'Crear Carrera';

            require '../vistas/include/modal.php';
        }
    } else
    if ($action == "pensum") {

        $modalBody = '../vistas/Programas/MateriasCarrera';
        $tituloModal = 'Pensum';

        require '../vistas/include/modalSimple.php';
    } else
        if ($action == "crearpensum") {

            $modalBody = '../vistas/Programas/CrearMateriaPensum.php';
            $formAction = 'programas.php?action=crearpensum';
            $tituloModal = 'Agregar Materia Pensum';

            require '../vistas/include/modal.php';
        }
} else {
    require '../vistas/Programas/Lista.php';
}
?>
