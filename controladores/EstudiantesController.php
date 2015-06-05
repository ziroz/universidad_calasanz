<?php

class EstudiantesController extends MasterController {

    public function getIndex() {
        $data['tituloPagina'] = "Estudiantes";
        $data['datos'] = EstudiantesM::retornar();

        View::load("Estudiantes/Lista", $data);
    }

    public function getIngresar() {

        $data['modalBody'] = './' . BASE_VIEWS . '/Estudiantes/EditarCrear.php';
        $data['formAction'] = Url::getUrl("estudiantes", "ingresar");
        $data['tituloModal'] = 'Crear Estudiantes';

        $data['data'] = $data;

        $data['modelo'] = [
            "est_per_consecutivoP" => "",
            "per_nombre_completo" => "",
            "per_identificacion" => "",
            "per_fecha_nacimiento" => "",
            "per_email" => "",
            "per_estado" => "",
            "est_apodo" => "",
            "est_car_codigo" => "",
            "est_fecha_matricula" => "",
            "est_peri_consecutivo" => "",
        ];
        $data['programas'] = programasM::retornar();
        $data['periodos'] = periodosM::retornar();
        View::loadModal($data);
    }

    public function postIngresar($request) {
        estudiantesM::ingresar($request);
        Redirect::to(Url::getUrl("estudiantes", "index"));
    }

    public function getModificar($id) {
        $data['modalBody'] = './' . BASE_VIEWS . '/Estudiantes/EditarCrear.php';
        $data['formAction'] = Url::getUrl("estudiantes", "modificar");
        $data['tituloModal'] = 'Modificar Estudiantes';

        $data['data'] = $data;

        $data['modelo'] = estudiantesM::detalleRetornar($_GET["id"]);
        $data['programas'] = programasM::retornar();
        $data['periodos'] = periodosM::retornar();
        View::loadModal($data);
    }

    public function postModificar($request) {
        estudiantesM::modificar($request);
        Redirect::to(Url::getUrl("estudiantes", "index"));
    }

    public function getEliminar($request) {
        estudiantesM::eliminar($request["id"]);
        Redirect::to(Url::getUrl("estudiantes", "index"));
    }

    public function getMatricular($request) {
        $data['modalBody'] = './' . BASE_VIEWS . '/Estudiantes/MatricularMateria.php';

        $data['formAction'] = Url::getUrl("estudiantes", "matricular");
        $data['tituloModal'] = 'Matricular Materia';

        $data['data'] = $data;

        $data['modelo'] = [
            "matmat_per_consecutivo" => $request["id"],
            "matmat_mat_codigo" => "",
            "matmat_per_consecutivo_docente" => "",
            "matmat_aula" => "",
            "matmat_peri_consecutivo" => "",
        ];

        $data['materias'] = materiasM::retornar();
        $data['periodos'] = periodosM::retornar();
        $data['docentes'] = docentesM::retornar();

        View::loadModal($data);
    }

    public function postMatricular($request) {
        matriculasMateriasM::ingresar($request);
        Redirect::to(Url::getUrl("estudiantes", "index"));
    }

}
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
