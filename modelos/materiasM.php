<?php 
class materiasM {
    
    public static function ingresar($data){
        mysql_query("INSERT INTO tbl_materias(mat_codigoP, mat_nombre, mat_descripcion, mat_cupos_maximo, mat_horas_semanales) VALUES ('{$data["mat_codigoP"]}','{$data["mat_nombre"]}','{$data["mat_descripcion"]}',{$data["mat_cupos_maximo"]},{$data["mat_horas_semanales"]})");  
    }
    
    public static function retornar(){
        return mysql_query("SELECT mat_codigoP, mat_nombre, mat_descripcion, mat_cupos_maximo, mat_horas_semanales FROM tbl_materias");
    }
    
    
    public static function detalleRetornar($mat_codigoP){
        $detalle = mysql_query("SELECT mat_codigoP, mat_nombre, mat_descripcion, mat_cupos_maximo, mat_horas_semanales FROM tbl_materias WHERE mat_codigoP='$mat_codigoP'");
        return mysql_fetch_assoc($detalle);
    }
    
    public static function modificar($data){
        mysql_query("UPDATE tbl_materias SET mat_nombre='{$data["mat_nombre"]}', mat_descripcion = '{$data["mat_descripcion"]}', mat_cupos_maximo = {$data["mat_cupos_maximo"]}, mat_horas_semanales = {$data["mat_horas_semanales"]} WHERE mat_codigoP='{$data["mat_codigoP"]}'");
    }
    public static function eliminar($mat_codigoP){
        mysql_query("DELETE FROM tbl_materias WHERE mat_codigoP='$mat_codigoP'");
    }
}