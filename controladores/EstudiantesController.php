<?php

class EstudiantesController extends MasterController {

    public function getIndex() {
        $data['tituloPagina'] = "Estudiantes";

        if (Session::getUser()['rol'] == '2') {
            $data['materias'] = materiasM::retornarPorDocente(Session::getUser()['per_consecutivoP']);
            View::load("Estudiantes/InicioDocente", $data);
        } else {
            $data['datos'] = EstudiantesM::retornar();
            View::load("Estudiantes/Lista", $data);
        }
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

    public function getEvaluar($request) {

        $data['modalBody'] = './' . BASE_VIEWS . '/Estudiantes/Evaluar.php';
        $data['formAction'] = Url::getUrl("estudiantes", "matricular");
        $data['tituloModal'] = 'Evaluar Materias';

        $data['data'] = $data;

        $materia = isset($request['materia']) ? $request['materia'] : NULL;
        $data['matriculas'] = matriculasMateriasM::retornarPorEstudiante($request["id"], $materia);
        $data['tituloModal'] = 'Evaluar Materias';
        $data['id'] = $request["id"];

        View::load('include/modalSimple', $data);
    }

    public function postEvaluar($request) {

        header('Content-type: application/json; charset=utf-8');

        $method = "ingresarNotaCorte{$request["index"]}";
        $data = [
            "matmat_eva_nota_corte_{$request["index"]}" => $request["valor"],
            "matmat_consecutivoP" => $request["matmat_consecutivoP"]
        ];

        matriculasMateriasM::$method($data);

        $nota = matriculasMateriasM::NotaFinal($request["matmat_consecutivoP"]);
        echo json_encode($nota["matmat_nota_final"]);
    }

    public function getListaPorMateria($request) {
        $array = estudiantesM::retornarPorAsignatura($request['materia']);
        $datos = [];
        foreach ($array as $key => $estudiante) {
            $nota = matriculasMateriasM::NotaFinal($estudiante["matmat_consecutivoP"]);
            $estudiante['nota_final'] = $nota['matmat_nota_final'];
            $datos[]=$estudiante;
        }
        
        $data['datos'] = $datos;
        View::load("Estudiantes/ListaDocente", $data);
    }

}

?>
