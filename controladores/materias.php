

<?php 
//
//if (isset($_GET['action'])) {
//    $action = $_GET["action"];
//    $isPost = $_SERVER['REQUEST_METHOD'] === 'POST';
//    
//    if ($action == "ingresar") {
//
//        if ($isPost) {
//            materiasM::ingresar($_POST);
//
//            header('Location:materias.php');
//        } else {
//
//            $data['modalBody'] = '../vistas/Materias/EditarCrear.php';
//            $data['formAction'] = 'materias.php?action=ingresar';
//            $data['tituloModal'] = 'Crear Materia';
//
//            $modelo = [
//                "mat_codigoP" => "",
//                "mat_nombre" => "",
//                "mat_descripcion" => "",
//                "mat_cupos_maximo" => "",
//                "mat_horas_semanales" => ""
//            ];
//
//            require '../vistas/include/modal.php';
//        }
//    } else
//    if ($action == "modificar") {
//        if ($isPost) {
//
//            materiasM::modificar($_POST);
//
//            header('Location:materias.php');
//        } else {
//
//            $data['modalBody'] = '../vistas/Materias/EditarCrear.php';
//            $data['formAction'] = 'materias.php?action=modificar';
//            $data['tituloModal'] = 'Modificar Materia';
//            
//            $modelo = materiasM::detalleRetornar($_GET["id"]);
//           
//            require '../vistas/include/modal.php';
//        }
//    } else
//    if ($action == "eliminar") {
//        
//        materiasM::eliminar($_GET["id"]);
//        header('Location:materias.php');
//    } 
//} else {
//    $datos = mysql_query("SELECT mat_codigoP, mat_nombre, mat_descripcion, mat_cupos_maximo, mat_horas_semanales FROM tbl_materias");
//    require '../vistas/Materias/Lista.php';
//}
?>
