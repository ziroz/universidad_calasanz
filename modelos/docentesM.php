<?php 

class docentesM extends MasterModel implements InterfazModelos{

    static $table = 'tbl_docentes';
    static $primary = 'doc_per_consecutivoP';

    
    public static function ingresar($data){
        $data["rol"] = 2;
        $persona = personasM::ingresar($data);
        static::query("INSERT INTO tbl_docentes(doc_per_consecutivoP, doc_oficina, doc_telefono_oficina, doc_categoria, doc_valor_hora) VALUES ('{$persona["id"]}','{$data["doc_oficina"]}','{$data["doc_telefono_oficina"]}','{$data["doc_categoria"]}',{$data["doc_valor_hora"]})");  
    }
    
    public static function retornar(){
        return static::query("SELECT doc_per_consecutivoP, doc_oficina, doc_telefono_oficina, doc_categoria, doc_valor_hora, per_consecutivoP,per_identificacion, per_nombre_completo,DATE_FORMAT(per_fecha_nacimiento,'%d/%m/%Y') as  per_fecha_nacimiento, per_email, per_estado,per_usu_nombre,per_usu_contrasena FROM tbl_personas JOIN tbl_docentes ON per_consecutivoP = doc_per_consecutivoP");
    }
    
    
    public static function detalleRetornar($id){
         $detalle =  static::query("SELECT doc_per_consecutivoP, doc_oficina, doc_telefono_oficina, doc_categoria, doc_valor_hora, per_consecutivoP,per_identificacion, per_nombre_completo,DATE_FORMAT(per_fecha_nacimiento,'%d/%m/%Y') as per_fecha_nacimiento, per_email, per_estado,per_usu_nombre,per_usu_contrasena FROM tbl_personas JOIN tbl_docentes ON per_consecutivoP = doc_per_consecutivoP WHERE per_consecutivoP='$id'");
         return $detalle[0];
    }
    
    public static function modificar($data){
        personasM::modificar($data);
        static::query("UPDATE tbl_docentes SET doc_oficina='{$data["doc_oficina"]}', doc_telefono_oficina = '{$data["doc_telefono_oficina"]}', doc_categoria = '{$data["doc_categoria"]}', doc_valor_hora = {$data["doc_valor_hora"]} WHERE doc_per_consecutivoP= {$data["per_consecutivoP"]}");
    }
    public static function eliminar($id){
        static::deleteById($id);
        personasM::eliminar($id);
    }
}