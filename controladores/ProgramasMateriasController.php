<?php

class ProgramasMateriasController extends MasterController {

    public function getListar($request) {
        $data['datos'] = programasMateriasM::retornar($request['id']);
        View::load('ProgramasMaterias/Lista',$data);
    }
    
    public function getIngresar($request) {
        $data['modalBody'] = './' . BASE_VIEWS . '/ProgramasMaterias/EditarCrear.php';
        $data['formAction'] = Url::getUrl("programasMaterias", "ingresar");
        $data['tituloModal'] = 'Relacionar Materias';

        $data['data'] = $data;
        $data['id'] = $request['id'];

        $data['materias'] = materiasM::retornar();
        View::loadModal($data);
    }
    public function postIngresar($request) {
        header('Content-Type: application/json');
        programasMateriasM::ingresar($request);
        echo json_encode([]);
    }

    public function postEliminar($request) {
        header('Content-Type: application/json');
        programasMateriasM::eliminar($request["id"]);
        echo json_encode([]);
    }
}

?>
