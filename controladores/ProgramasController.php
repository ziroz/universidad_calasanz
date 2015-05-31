<?php

class ProgramasController extends MasterController {

    public function getIndex() {
        $tituloPagina = "Programas";
        $datos = programasM::retornar();
        require './vistas/Programas/Lista.php';

//        View::load("Programas/Lista");
    }

    public function getIngresar() {

        $data['modalBody'] = './' . BASE_VIEWS . '/Programas/EditarCrear.php';
        $data['formAction'] = 'index.php?controller=programas&action=ingresar';
        $data['tituloModal'] = 'Crear Carrera';

        $modelo = [
            "car_codigoP" => "",
            "car_nombre" => "",
            "car_valor_semestre" => "",
            "car_numero_semestres" => ""
        ];

        require "./vistas/include/modal.php";
    }

    public function postIngresar($request) {
        programasM::ingresar($request);
        Redirect::to("index.php?controller=programas&action=index");
    }

    public function getModificar($id) {
        $data['modalBody'] = './' . BASE_VIEWS . '/Programas/EditarCrear.php';
        $data['formAction'] = 'index.php?controller=programas&action=modificar';
        $data['tituloModal'] = 'Modificar Carrera';

        $modelo = programasM::detalleRetornar($_GET["id"]);
        require "./vistas/include/modal.php";
    }

    public function postModificar($request) {
        programasM::modificar($request);
        Redirect::to("index.php?controller=programas&action=index");
    }

    public function getEliminar($request) {
        programasM::eliminar($request["id"]);
        Redirect::to("index.php?controller=programas&action=index");
    }

}

//
//if (isset($_GET['action'])) {
//    $action = $_GET["action"];
//    $isPost = $_SERVER['REQUEST_METHOD'] === 'POST';
//
//    if ($action == "pensum") {
//
//        $data['modalBody'] = '../vistas/Programas/MateriasCarrera';
//        $data['tituloModal'] = 'Pensum';
//
//        require '../vistas/include/modalSimple.php';
//    } else
//    if ($action == "crearpensum") {
//
//        $data['modalBody'] = '../vistas/Programas/CrearMateriaPensum.php';
//        $data['formAction'] = 'programas.php?action=crearpensum';
//        $data['tituloModal'] = 'Agregar Materia Pensum';
//
//        require '../vistas/include/modal.php';
//    }
//} else {
//    
//}
?>
