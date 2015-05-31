<?php
//
//if (isset($_GET['action'])) {
//    $action = $_GET["action"];
//    $isPost = $_SERVER['REQUEST_METHOD'] === 'POST';
//
//    if ($action == "ingresar") {
//
//        if ($isPost) {
//            estudiantesM::ingresar($_POST);
//
//            header('Location:estudiantes.php');
//        } else {
//
//            $data['modalBody'] = '../vistas/Estudiantes/EditarCrear.php';
//            $data['formAction'] = 'estudiantes.php?action=ingresar';
//            $data['tituloModal'] = 'Crear Estudiante';
//
//            $modelo = [
//                "per_consecutivoP" => "",
//                "per_nombre_completo" => "",
//                "per_identificacion" => "",
//                "per_fecha_nacimiento" => "",
//                "per_email" => "",
//                "per_estado" => "",
//                "est_apodo" => "",
//                "est_car_codigo" => "",
//                "est_fecha_matricula" => "",
//                "est_peri_consecutivo" => "",
//            ];
//
//            $programas = programasM::retornar();
//            $periodos = periodosM::retornar();
//
//            require '../vistas/include/modal.php';
//        }
//    } else
//    if ($action == "modificar") {
//        if ($isPost) {
//
//            estudiantesM::modificar($_POST);
//
//            header('Location:estudiantes.php');
//        } else {
//
//            $data['modalBody'] = '../vistas/Estudiantes/EditarCrear.php';
//            $data['formAction'] = 'estudiantes.php?action=modificar';
//            $data['tituloModal'] = 'Modificar Estudiante';
//
//            $modelo = estudiantesM::detalleRetornar($_GET["id"]);
//
//            $programas = programasM::retornar();
//            $periodos = periodosM::retornar();
//
//            require '../vistas/include/modal.php';
//        }
//    } else
//    if ($action == "eliminar") {
//
//        estudiantesM::eliminar($_GET["id"]);
//
//        header('Location:estudiantes.php');
//    } else
//    if ($action == "matricular") {
//        if ($isPost) {
//            matriculasMateriasM::ingresar($_POST);
//
//            header('Location:estudiantes.php');
//        } else {
//
//            $data['modalBody'] = '../vistas/Estudiantes/MatricularMateria.php';
//            $data['formAction'] = 'estudiantes.php?action=matricular';
//            $data['tituloModal'] = 'Matricular Materia';
//
//            $modelo = [
//                "matmat_per_consecutivo" => $_GET["id"],
//                "matmat_mat_codigo" => "",
//                "matmat_per_consecutivo_docente" => "",
//                "matmat_aula" => "56",
//                "matmat_peri_consecutivo" => "",
//            ];
//
//            $materias = materiasM::retornar();
//            $periodos = periodosM::retornar();
//            $docentes = docentesM::retornar();
//
//            require '../vistas/include/modal.php';
//        }
//    } else
//    if ($action == "evaluar") {
//        if($isPost){
//            $method = "ingresarNotaCorte{$_POST["index"]}";
//            $data = [
//                "matmat_eva_nota_corte_{$_POST["index"]}" => $_POST["valor"],
//                "matmat_consecutivoP" => $_POST["matmat_consecutivoP"]
//            ];
//            matriculasMateriasM::$method($data);
//            header('Content-type: application/json; charset=utf-8');
//            echo json_encode("Muy bien");
//        }else{
//            $matriculas = matriculasMateriasM::retornarPorEstudiante($_GET["id"]);
//            $id = $_GET["id"];
//            $data['modalBody'] = '../vistas/Estudiantes/Evaluar.php';
//            $data['tituloModal'] = 'Evaluar Materias';
//
//            require '../vistas/include/modalSimple.php';
//            
//        }
//    }else
//    if ($action == "promedioMateria") {
//        $nota = matriculasMateriasM::NotaFinal($_GET["matmat_consecutivoP"]);
//        header('Content-type: application/json; charset=utf-8');
//        echo json_encode($nota["matmat_nota_final"]);
//        
//    }
//} else {
//    $datos = estudiantesM::retornar();
//    require '../vistas/Estudiantes/Lista.php';
//}
?>
