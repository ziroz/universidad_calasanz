<?php 

class personasM extends MasterModel implements InterfazModelos{

    static $table = 'tbl_carreras';
    static $primary = 'car_codigoP';
    
    public static function ingresar($data){
       static::query("INSERT INTO tbl_personas(per_identificacion, per_nombre_completo, per_fecha_nacimiento, per_email, per_estado) VALUES ('{$data["per_identificacion"]}','{$data["per_nombre_completo"]}',STR_TO_DATE('{$data["per_fecha_nacimiento"]}', '%d/%m/%Y'),'{$data["per_email"]}','1')");  
       
       $detalle = static::query("SELECT MAX(per_consecutivoP) as id from tbl_personas");
       return $detalle[0];
    }    
    public static function retornar(){
        return static::all("per_consecutivoP,per_identificacion, per_nombre_completo, per_fecha_nacimiento, per_email, per_estado,per_usu_nombre,per_usu_contrasena");
    }        
    public static function detalleRetornar($id){
        $detalle = static::detailById($id,"per_consecutivoP,per_identificacion, per_nombre_completo, per_fecha_nacimiento, per_email, per_estado,per_usu_nombre,per_usu_contrasena");
        return $detalle;
    }    
    public static function modificar($data){
        ClearText::sanitize($data);
        static::query("UPDATE tbl_personas SET per_identificacion='{$data["per_identificacion"]}', per_nombre_completo = '{$data["per_nombre_completo"]}', per_fecha_nacimiento = STR_TO_DATE('{$data["per_fecha_nacimiento"]}', '%d/%m/%Y'), per_email = '{$data["per_email"]}'  WHERE per_consecutivoP={$data["per_consecutivoP"]}");
    }
     public static function usuarioIngresar($data){
        ClearText::sanitize($data);
        static::query("UPDATE tbl_personas SET per_usu_nombre='{$data["per_usu_nombre"]}', per_usu_contrasena = '{$data["per_usu_contrasena"]}' WHERE per_consecutivoP={$data["per_consecutivoP"]}");
    }
    public static function inactivarPersoas($data){
        ClearText::sanitize($data);
        static::query("UPDATE tbl_personas SET per_estado='{$data["per_estado"]}' WHERE per_consecutivoP={$data["per_consecutivoP"]}");
    }
    public static function eliminar($id){
          static::deleteById($id);
    }
      
}?>