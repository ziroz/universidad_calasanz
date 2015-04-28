<?php

if (isset($_GET['action'])) {
    $action = $_GET["action"];

    if ($action == "materias") {
        $isPost = count($_POST) > 0;
        if ($isPost) {
            echo '<pre>';
            var_dump($_POST);
            echo '</pre>';
            exit();
            header('Location:programas.php');
        } else {
            $modalBody = '../vistas/Estudiantes/MatricularMateria.php';
            $formAction = 'programas.php?action=crear';
            $tituloModal = 'Crear Carrera';

            require '../vistas/include/modal.php';
        }
    } 
} else {
    require '../vistas/Estudiantes/Lista.php';
}
?>
