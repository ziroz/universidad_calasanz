<?php

class estudiantesM extends MasterModel implements InterfazModelos{

    static $table = 'tbl_estudiantes';
    static $primary = 'est_per_consecutivoP';

    public static function ingresar($data) {
        $data["rol"] = 1;
        $persona = personasM::ingresar($data);
        static::query("INSERT INTO tbl_estudiantes(est_apodo, est_car_codigo, est_fecha_matricula, est_peri_consecutivo,est_per_consecutivoP) VALUES ('{$data["est_apodo"]}','{$data["est_car_codigo"]}',STR_TO_DATE('{$data["est_fecha_matricula"]}', '%d/%m/%Y'),{$data["est_peri_consecutivo"]},{$persona["id"]})");
    }

    public static function retornar() {
        return static::query("SELECT est_per_consecutivoP,per_consecutivoP,per_nombre_completo, per_identificacion,DATE_FORMAT(per_fecha_nacimiento,'%d/%m/%Y') as per_fecha_nacimiento, per_email,per_estado,per_usu_nombre,per_usu_contrasena,est_apodo,est_car_codigo,DATE_FORMAT(est_fecha_matricula,'%d/%m/%Y') as est_fecha_matricula,est_peri_consecutivo, "
                . "peri_nombre, car_nombre "
                . "FROM tbl_personas "
                . " JOIN tbl_estudiantes ON tbl_estudiantes.est_per_consecutivoP = tbl_personas.per_consecutivoP "
                . "LEFT JOIN tbl_carreras ON tbl_estudiantes.est_car_codigo = tbl_carreras.car_codigoP "
                . "LEFT JOIN tbl_periodos ON tbl_estudiantes.est_peri_consecutivo = tbl_periodos.peri_consecutivoP");
    }

    public static function detalleRetornar($id) {
        $detalle =  static::query("SELECT est_per_consecutivoP,per_consecutivoP,per_nombre_completo, per_identificacion,DATE_FORMAT(per_fecha_nacimiento,'%d/%m/%Y') as per_fecha_nacimiento,"
                . " per_email,per_estado,per_usu_nombre,per_usu_contrasena,est_apodo,est_car_codigo,DATE_FORMAT(est_fecha_matricula,'%d/%m/%Y') as est_fecha_matricula,est_peri_consecutivo"
                . " FROM tbl_personas "
                . "LEFT JOIN tbl_estudiantes on tbl_estudiantes.est_per_consecutivoP = tbl_personas.per_consecutivoP "
                . "WHERE per_consecutivoP='$id'");
        return  $detalle[0];
    }

    public static function modificar($data) {
        personasM::modificar($data);
        static::query("UPDATE tbl_estudiantes SET est_apodo='{$data["est_apodo"]}', est_car_codigo = '{$data["est_car_codigo"]}',est_peri_consecutivo = {$data["est_peri_consecutivo"]}, est_fecha_matricula = STR_TO_DATE('{$data["est_fecha_matricula"]}', '%d/%m/%Y') WHERE est_per_consecutivoP='{$data["per_consecutivoP"]}'");
    }

 public static function eliminar($id){
         static::deleteById($id);
        personasM::eliminar($id);
    }
    
    public static function retornarPorAsignatura($asignatura) {
                
        return static::query("SELECT DISTINCT matmat_per_consecutivo, per_nombre_completo, per_identificacion, peri_consecutivoP, peri_nombre, matmat_mat_codigo,matmat_consecutivoP, car_nombre "
                . "FROM tbl_matriculas_materias "
                . "JOIN tbl_personas ON matmat_per_consecutivo = per_consecutivoP "
                . "JOIN tbl_estudiantes ON est_per_consecutivoP = per_consecutivoP "
                . "JOIN tbl_carreras ON est_car_codigo = car_codigoP "
                . "JOIN tbl_materias ON mat_codigoP = matmat_mat_codigo "
                . "JOIN tbl_periodos ON peri_consecutivoP = matmat_peri_consecutivo "
                . "WHERE matmat_mat_codigo = '{$asignatura}'");
    }
}
?>