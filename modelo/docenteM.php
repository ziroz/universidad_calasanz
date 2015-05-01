<?php 
class docenteM {
    
    public static function ingresar($data){
        mysql_query("INSERT INTO tbl_docentes(doc_per_consecutivoP, doc_oficina, doc_telefono_oficina, doc_categoria, doc_valor_hora) VALUES ('{$data["doc_per_consecutivoP"]}','{$data["doc_oficina"]}','{$data["doc_telefono_oficina"]}','{$data["doc_categoria"]}',{$data["doc_valor_hora"]})");  
    }
    
    public static function retornar(){
        return mysql_query("SELECT doc_per_consecutivoP, doc_oficina, doc_telefono_oficina, doc_categoria, doc_valor_hora per_consecutivoP,per_identificacion, per_nombre_completo, per_fecha_nacimiento, per_email, per_estado,per_usu_nombre,per_usu_contrasena FROM tbl_personas JOIN tbl_docentes ON per_consecutivoP = doc_per_consecutivoP");
    }
    
    
    public static function detalleRetornar($per_consecutivoP){
        $detalle = mysql_query("SELECT doc_per_consecutivoP, doc_oficina, doc_telefono_oficina, doc_categoria, doc_valor_hora per_consecutivoP,per_identificacion, per_nombre_completo, per_fecha_nacimiento, per_email, per_estado,per_usu_nombre,per_usu_contrasena FROM tbl_personas JOIN tbl_docentes ON per_consecutivoP = doc_per_consecutivoP WHERE per_consecutivoP='$per_consecutivoP'");
        return mysql_fetch_assoc($detalle);
    }
    
    public static function modificar($data){
        mysql_query("UPDATE tbl_docentes SET doc_oficina='{$data["doc_oficina"]}', doc_telefono_oficina = '{$data["doc_telefono_oficina"]}', doc_categoria = '{$data["doc_categoria"]}', doc_valor_hora = {$data["doc_valor_hora"]} WHERE doc_per_consecutivoP= {$data["doc_per_consecutivoP"]}");
    }
    public static function eliminar($doc_per_consecutivoP){
        mysql_query("DELETE FROM tbl_docentes WHERE doc_per_consecutivoP=$doc_per_consecutivoP");
    }
}