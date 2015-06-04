

<?php 
class MateriasController extends MasterController {

     public function getIndex() {
        $tituloPagina = "Materias";
        $datos = materiasM::retornar();
        require './vistas/Materias/Lista.php';

//        View::load("Programas/Lista");
    }
     public function getIngresar() {

        $data['modalBody'] = './' . BASE_VIEWS . '/Materias/EditarCrear.php';
        $data['formAction'] = 'index.php?controller=materias&action=ingresar';
        $data['tituloModal'] = 'Crear Materia';

        $modelo = [
            "mat_codigoP" => "",
            "mat_nombre" => "",
            "mat_descripcion" => "",
            "mat_cupos_maximo" => "",
            "mat_horas_semanales" => ""
        ];

        require "./vistas/include/modal.php";
    }

    public function postIngresar($request) {
        materiasM::ingresar($request);
        Redirect::to("index.php?controller=materias&action=index");
    }

    public function getModificar($id) {
        $data['modalBody'] = './' . BASE_VIEWS . '/Materias/EditarCrear.php';
        $data['formAction'] = 'index.php?controller=materias&action=modificar';
        $data['tituloModal'] = 'Modificar Materia';

        $modelo = materiasM::detalleRetornar($_GET["id"]);
        require "./vistas/include/modal.php";
    }

    public function postModificar($request) {
        materiasM::modificar($request);
        Redirect::to("index.php?controller=materias&action=index");
    }

    public function getEliminar($request) {
        materiasM::eliminar($request["id"]);
        Redirect::to("index.php?controller=materias&action=index");
    }

}

?>
