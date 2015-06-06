<?php 
class materiasM extends MasterModel implements InterfazModelos{

    static $table = 'tbl_materias';
    static $primary = 'mat_codigoP';
    
    public static function ingresar($data){
        ClearText::sanitize($data);
        static::query("INSERT INTO tbl_materias(mat_codigoP, mat_nombre, mat_descripcion, mat_cupos_maximo, mat_horas_semanales) VALUES ('{$data["mat_codigoP"]}','{$data["mat_nombre"]}','{$data["mat_descripcion"]}',{$data["mat_cupos_maximo"]},{$data["mat_horas_semanales"]})");  
    }
    
    public static function retornar(){
        return static::all("mat_codigoP, mat_nombre, mat_descripcion, mat_cupos_maximo, mat_horas_semanales");
    }
    
    
    public static function detalleRetornar($id){
         $detalle = static::detailById($id,"mat_codigoP, mat_nombre, mat_descripcion, mat_cupos_maximo, mat_horas_semanales");
        return $detalle;
        
    }
    
    public static function modificar($data){
        ClearText::sanitize($data);
        static::query("UPDATE tbl_materias SET mat_nombre='{$data["mat_nombre"]}', mat_descripcion = '{$data["mat_descripcion"]}', mat_cupos_maximo = {$data["mat_cupos_maximo"]}, mat_horas_semanales = {$data["mat_horas_semanales"]} WHERE mat_codigoP='{$data["mat_codigoP"]}'");
    }
    public static function eliminar($id){
         static::deleteById($id);
    }
}