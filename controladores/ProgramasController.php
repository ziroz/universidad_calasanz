<?php

class ProgramasController extends MasterController {

    public function getIndex() {
        $data['tituloPagina'] = "Programas";
        $data['datos'] = programasM::retornar();

        View::load("Programas/Lista", $data);
    }

    public function getIngresar() {

        $data['modalBody'] = './' . BASE_VIEWS . '/Programas/EditarCrear.php';
        $data['formAction'] = Url::getUrl("programas", "ingresar");
        $data['tituloModal'] = 'Crear Carrera';

        $data['data'] = $data;

        $data['modelo'] = [
            "car_codigoP" => "",
            "car_nombre" => "",
            "car_valor_semestre" => "",
            "car_numero_semestres" => ""
        ];

        View::loadModal($data);
    }

    public function postIngresar($request) {
        programasM::ingresar($request);
        Redirect::to(Url::getUrl("programas", "index"));
    }

    public function getModificar($id) {
        $data['modalBody'] = './' . BASE_VIEWS . '/Programas/EditarCrear.php';
        $data['formAction'] = Url::getUrl("programas", "modificar");
        $data['tituloModal'] = 'Modificar Carrera';

        $data['data'] = $data;

        $data['modelo'] = programasM::detalleRetornar($_GET["id"]);
        View::loadModal($data);
    }

    public function postModificar($request) {
        programasM::modificar($request);
        Redirect::to(Url::getUrl("programas", "index"));
    }

    public function getEliminar($request) {
        programasM::eliminar($request["id"]);
        Redirect::to(Url::getUrl("programas", "index"));
    }
}

?>
