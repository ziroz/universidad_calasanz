<?php

class programasMateriasM extends MasterModel {
    static $table = 'tbl_carreras_materias';
    static $primary = 'carmat_consecutivoP';

    public static function ingresar($data){
        ClearText::sanitize($data);
        static::query("INSERT INTO tbl_carreras_materias(carmat_mat_codigo, carmat_car_codigo, carmat_ciclo) VALUES ('{$data["carmat_mat_codigo"]}','{$data["carmat_car_codigo"]}','{$data["carmat_ciclo"]}')");
    }    
    public static function retornar($data){
        return static::query("SELECT carmat_consecutivoP,carmat_mat_codigo, carmat_car_codigo, carmat_ciclo FROM tbl_carreras_materias WHERE carmat_car_codigo = '".$data."'");
    }        

    public static function eliminar($id){
        static::deleteById($id);    
    }
}


