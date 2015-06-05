<?php
class DocentesController extends MasterController {

    public function getIndex() {
        $data['tituloPagina'] = "Docentes";
        $data['datos'] = docentesM::retornar();

        View::load("Docentes/Lista", $data);
    }

    public function getIngresar() {

         
        
        $data['modalBody'] = './' . BASE_VIEWS . '/Docentes/EditarCrear.php';
        $data['formAction'] = Url::getUrl("docentes", "ingresar");
        $data['tituloModal'] = 'Crear Docente';

        $data['data'] = $data;
         
        $data['modelo'] = [
               "doc_per_consecutivoP" => "",
                "per_nombre_completo" => "",
                "per_identificacion" => "",
                "per_fecha_nacimiento" => "",
                "per_email" => "",
                "doc_oficina" => "",
                "doc_telefono_oficina" => "",
                "doc_categoria" => "",
                "doc_valor_hora" => "",
        ];

        View::loadModal($data);
    }

    public function postIngresar($request) {
        docentesM::ingresar($request);
        Redirect::to(Url::getUrl("docentes", "index"));
    }

    public function getModificar($id) {
        $data['modalBody'] = './' . BASE_VIEWS . '/Docentes/EditarCrear.php';
        $data['formAction'] = Url::getUrl("docentes", "modificar");
        $data['tituloModal'] = 'Modificar Docente';

        $data['data'] = $data;

        $data['modelo'] = docentesM::detalleRetornar($_GET["id"]);
        View::loadModal($data);
    }

    public function postModificar($request) {
        docentesM::modificar($request);
        Redirect::to(Url::getUrl("docentes", "index"));
    }

    public function getEliminar($request) {
        docentesM::eliminar($request["id"]);
        Redirect::to(Url::getUrl("docentes", "index"));
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
//            docentesM::ingresar($_POST);
//
//            header('Location:docentes.php');
//        } else {
//
//            $data['modalBody'] = '../vistas/Docentes/EditarCrear.php';
//            $data['formAction'] = 'docentes.php?action=ingresar';
//            $data['tituloModal'] = 'Crear Docente';
//
//            $modelo = [
//                "per_consecutivoP" => "",
//                "per_nombre_completo" => "",
//                "per_identificacion" => "",
//                "per_fecha_nacimiento" => "",
//                "per_email" => "",
//                "doc_oficina" => "",
//                "doc_telefono_oficina" => "",
//                "doc_categoria" => "",
//                "doc_valor_hora" => "",
//            ];
//
//            require '../vistas/include/modal.php';
//        }
//    } else
//    if ($action == "modificar") {
//        if ($isPost) {
//
//            docentesM::modificar($_POST);
//
//            header('Location:docentes.php');
//        } else {
//
//            $data['modalBody'] = '../vistas/Docentes/EditarCrear.php';
//            $data['formAction'] = 'docentes.php?action=modificar';
//            $data['tituloModal'] = 'Modificar Docente';
//
//            $modelo = docentesM::detalleRetornar($_GET["id"]);
//
//            require '../vistas/include/modal.php';
//        }
//    } else
//    if ($action == "eliminar") {
//
//        docentesM::eliminar($_GET["id"]);
//
//        header('Location:docente.php');
//    }
//} else {
//    $datos = docentesM::retornar();
//    require '../vistas/Docentes/Lista.php';
//}
?>
