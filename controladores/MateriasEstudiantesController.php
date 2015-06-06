

<?php 
class MateriasEstudiantesController extends MasterController {

     public function getIndex() {
        $data['tituloPagina'] = "Materias Estudiante";
        $data['datos'] = matriculasMateriasM::retornarPorEstudiante();

        View::load("Programas/Lista", $data);
    }
}
?>
