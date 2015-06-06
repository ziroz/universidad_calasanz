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
    
    public static function retornarPorDocente($docente) {
        $datos = static::query("SELECT DISTINCT matmat_consecutivoP, matmat_per_consecutivo, matmat_mat_codigo, mat_nombre, matmat_aula, matmat_peri_consecutivo, peri_nombre "
                        . "FROM tbl_matriculas_materias "
                        . "JOIN tbl_materias ON mat_codigoP = matmat_mat_codigo "
                        . "JOIN tbl_periodos  ON peri_consecutivoP = matmat_peri_consecutivo "
                        . "WHERE matmat_per_consecutivo_docente = {$docente}");
                        
        return $datos;
    }
}