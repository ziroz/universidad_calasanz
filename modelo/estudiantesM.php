<?php
include 'personasM.php';
class estudiantesM {

    public static function ingresar($data) {
        $persona = personasM::ingresar($data);
        mysql_query("INSERT INTO tbl_estudiantes(est_apodo, est_car_codigo, est_fecha_matricula, est_peri_consecutivo,est_per_consecutivoP) VALUES ('{$data["est_apodo"]}','{$data["est_car_codigo"]}',STR_TO_DATE('{$data["est_fecha_matricula"]}', '%d/%m/%Y'),{$data["est_peri_consecutivo"]},{$persona})");
        
    }

    public static function retornar() {
        return mysql_query("SELECT per_consecutivoP,per_nombre_completo, per_identificacion,DATE_FORMAT(per_fecha_nacimiento,'%d/%m/%Y') as per_fecha_nacimiento, per_email,per_estado,per_usu_nombre,per_usu_contrasena,est_apodo,est_car_codigo,DATE_FORMAT(est_fecha_matricula,'%d/%m/%Y') as est_fecha_matricula,est_peri_consecutivo, "
                . "peri_nombre, car_nombre "
                . "FROM tbl_personas "
                . " JOIN tbl_estudiantes ON tbl_estudiantes.est_per_consecutivoP = tbl_personas.per_consecutivoP "
                . "LEFT JOIN tbl_carreras ON tbl_estudiantes.est_car_codigo = tbl_carreras.car_codigoP "
                . "LEFT JOIN tbl_periodos ON tbl_estudiantes.est_peri_consecutivo = tbl_periodos.peri_consecutivoP");
    }

    public static function detalleRetornar($est_per_consecutivoP) {
        $detalle = mysql_query("SELECT per_consecutivoP,per_nombre_completo, per_identificacion,DATE_FORMAT(per_fecha_nacimiento,'%d/%m/%Y') as per_fecha_nacimiento,"
                . " per_email,per_estado,per_usu_nombre,per_usu_contrasena,est_apodo,est_car_codigo,DATE_FORMAT(est_fecha_matricula,'%d/%m/%Y') as est_fecha_matricula,est_peri_consecutivo"
                . " FROM tbl_personas "
                . "LEFT JOIN tbl_estudiantes on tbl_estudiantes.est_per_consecutivoP = tbl_personas.per_consecutivoP "
                . "WHERE per_consecutivoP='$est_per_consecutivoP'");
        return mysql_fetch_assoc($detalle);
    }

    public static function modificar($data) {
        personasM::modificar($data);
        mysql_query("UPDATE tbl_estudiantes SET est_apodo='{$data["est_apodo"]}', est_car_codigo = '{$data["est_car_codigo"]}',est_peri_consecutivo = {$data["est_peri_consecutivo"]}, est_fecha_matricula = STR_TO_DATE('{$data["est_fecha_matricula"]}', '%d/%m/%Y') WHERE est_per_consecutivoP='{$data["per_consecutivoP"]}'");
    }

}

?>