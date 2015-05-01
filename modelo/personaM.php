<?php 
class personasM {
    
    public static function ingresar($data){
        mysql_query("INSERT INTO tbl_personas(per_identificacion, per_nombre_completo, per_fecha_nacimiento, per_email, per_estado) VALUES ('{$data["per_identificacion"]}','{$data["per_nombre_completo"]}','{$data["per_fecha_nacimiento"]}','{$data["per_email"]}','{$data["per_estado"]}')");  
    }    
    public static function retornar(){
        return mysql_query("SELECT per_consecutivoP,per_identificacion, per_nombre_completo, per_fecha_nacimiento, per_email, per_estado,per_usu_nombre,per_usu_contrasena FROM tbl_personas");
    }        
    public static function detalleRetornar($per_consecutivoP){
        $detalle = mysql_query("SELECT per_consecutivoP,per_identificacion, per_nombre_completo, per_fecha_nacimiento, per_email, per_estado,per_usu_nombre,per_usu_contrasena FROM tbl_personas WHERE per_consecutivoP='$per_consecutivoP'");
        return mysql_fetch_assoc($detalle);
    }    
    public static function modificar($data){
        mysql_query("UPDATE tbl_personas SET per_identificacion='{$data["per_identificacion"]}', per_nombre_completo = '{$data["per_nombre_completo"]}', per_fecha_nacimiento = '{$data["per_fecha_nacimiento"]}', per_email = '{$data["per_email"]}',  WHERE per_consecutivoP={$data["per_consecutivoP"]}");
    }
     public static function usuarioIngresar($data){
        mysql_query("UPDATE tbl_personas SET per_usu_nombre='{$data["per_usu_nombre"]}', per_usu_contrasena = '{$data["per_usu_contrasena"]}' WHERE per_consecutivoP={$data["per_consecutivoP"]}");
    }
    public static function inactivarPersoas($data){
        mysql_query("UPDATE tbl_personas SET per_estado='{$data["per_estado"]}' WHERE per_consecutivoP={$data["per_consecutivoP"]}");
    }
    public static function eliminar($per_consecutivoP){
        mysql_query("DELETE FROM tbl_personas where per_consecutivoP='$per_consecutivoP'");
    }
      
}?>