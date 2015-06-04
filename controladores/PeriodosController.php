<?php

class PeriodosController extends MasterController {

    public function getIndex() {
        $tituloPagina = "Períodos";
        $datos = periodosM::retornar();
        require './vistas/Periodos/Lista.php';

//        View::load("Programas/Lista");
    }

    public function getIngresar() {

        $data['modalBody'] = './' . BASE_VIEWS . '/Periodos/EditarCrear.php';
        $data['formAction'] = 'index.php?controller=periodos&action=ingresar';
        $data['tituloModal'] = 'Crear Periodo';

        $modelo = [
             "peri_consecutivoP" => "",
             "peri_nombre" => "",
             "peri_fecha_inicio" => "",
             "peri_fecha_fin" => ""
        ];

        require "./vistas/include/modal.php";
    }

    public function postIngresar($request) {
        periodosM::ingresar($request);
        Redirect::to("index.php?controller=periodos&action=index");
    }

    public function getModificar($id) {
        $data['modalBody'] = './' . BASE_VIEWS . '/Periodos/EditarCrear.php';
        $data['formAction'] = 'index.php?controller=periodos&action=modificar';
        $data['tituloModal'] = 'Modificar Periodo';

        $modelo = periodosM::detalleRetornar($_GET["id"]);
        require "./vistas/include/modal.php";
    }

    public function postModificar($request) {
        periodosM::modificar($request);
        Redirect::to("index.php?controller=periodos&action=index");
    }

    public function getEliminar($request) {
        periodosM::eliminar($request["id"]);
        Redirect::to("index.php?controller=periodos&action=index");
    }

}

//
//if (isset($_GET['action'])) {
//    $action = $_GET["action"];
//    $isPost = $_SERVER['REQUEST_METHOD'] === 'POST';
//    
//    if ($action == "ingresar") {
//
//        if ($isPost) {            
//            periodosM::ingresar($_POST);
//
//            header('Location:periodos.php');
//        } else {
//
//            $data['modalBody'] = '../vistas/Periodos/EditarCrear.php';
//            $data['formAction'] = 'periodos.php?action=ingresar';
//            $data['tituloModal'] = 'Crear Periodo';
//
//            $modelo = [
//                "peri_consecutivoP" => "",
//                "peri_nombre" => "",
//                "peri_fecha_inicio" => "",
//                "peri_fecha_fin" => ""
//            ];
//
//            require '../vistas/include/modal.php';
//        }
//    } else
//    if ($action == "modificar") {
//        if ($isPost) {
//
//            periodosM::modificar($_POST);
//
//            header('Location:periodos.php');
//        } else {
//
//            $data['modalBody'] = '../vistas/Periodos/EditarCrear.php';
//            $data['formAction'] = 'periodos.php?action=modificar';
//            $data['tituloModal'] = 'Modificar Periodo';
//            
//            $modelo = periodosM::detalleRetornar($_GET["id"]);
//           
//            require '../vistas/include/modal.php';
//        }
//    } else
//    if ($action == "eliminar") {
//        
//        periodosM::eliminar($_GET["id"]);
//        header('Location:periodos.php');
//    } 
//} else {
//    $datos = periodosM::retornar();
//    require '../vistas/Periodos/Lista.php';
//}
?>
