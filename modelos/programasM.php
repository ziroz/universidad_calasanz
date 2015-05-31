<?php

class programasM extends MasterModel implements InterfazModelos{

    static $table = 'tbl_carreras';
    static $primary = 'car_codigoP';


    public static function ingresar($data) {
        static::query("INSERT INTO tbl_carreras(car_codigoP, car_nombre, car_valor_semestre, car_numero_semestres) VALUES ('{$data["car_codigoP"]}','{$data["car_nombre"]}',{$data["car_valor_semestre"]},{$data["car_numero_semestres"]})");
    }

    public static function retornar() {
        return static::all("car_codigoP, car_nombre, car_valor_semestre, car_numero_semestres");
    }

    public static function detalleRetornar($id) {
        $detalle = static::detailById($id,"car_codigoP, car_nombre, car_valor_semestre, car_numero_semestres");
        return $detalle->fetch_assoc();
    }

    public static function modificar($data) {
        static::query("UPDATE tbl_carreras SET car_nombre='{$data["car_nombre"]}', car_valor_semestre = {$data["car_valor_semestre"]}, car_numero_semestres = {$data["car_numero_semestres"]} WHERE car_codigoP='{$data["car_codigoP"]}'");
    }

    public static function eliminar($id) {
        static::deleteById($id);
    }
}

?>