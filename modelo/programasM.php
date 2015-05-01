<?php

class programasM {

    public static function ingresar($data) {
        mysql_query("INSERT INTO tbl_carreras(car_codigoP, car_nombre, car_valor_semestre, car_numero_semestres) VALUES ('{$data["car_codigoP"]}','{$data["car_nombre"]}',{$data["car_valor_semestre"]},{$data["car_numero_semestres"]})");
    }

    public static function retornar() {
        return mysql_query("SELECT car_codigoP, car_nombre, car_valor_semestre, car_numero_semestres FROM tbl_carreras");
    }

    public static function detalleRetornar($car_codigoP) {
        $detalle = mysql_query("SELECT car_codigoP, car_nombre, car_valor_semestre, car_numero_semestres FROM tbl_carreras WHERE car_codigoP='$car_codigoP'");
        return mysql_fetch_assoc($detalle);
    }

    public static function modificar($data) {
        
        mysql_query("UPDATE tbl_carreras SET car_nombre='{$data["car_nombre"]}', car_valor_semestre = {$data["car_valor_semestre"]}, car_numero_semestres = {$data["car_numero_semestres"]} WHERE car_codigoP='{$data["car_codigoP"]}'");
    }

    public static function eliminar($car_codigoP) {
        mysql_query("DELETE FROM tbl_carreras where car_codigoP='$car_codigoP'");
    }

}

?>