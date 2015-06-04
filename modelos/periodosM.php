<?php 
class periodosM extends MasterModel implements InterfazModelos{

    static $table = 'tbl_periodos';
    static $primary = 'peri_consecutivoP';

    
    public static function ingresar($data){
       static::query("INSERT INTO tbl_periodos(peri_nombre, peri_fecha_inicio , peri_fecha_fin) VALUES ('{$data["peri_nombre"]}',STR_TO_DATE('{$data["peri_fecha_inicio"]}', '%d/%m/%Y'),STR_TO_DATE('{$data["peri_fecha_fin"]}', '%d/%m/%Y'))");
 
    }
    public static function retornar(){
        return static::all("peri_consecutivoP, peri_nombre, DATE_FORMAT(peri_fecha_inicio,'%d/%m/%Y') as peri_fecha_inicio, DATE_FORMAT(peri_fecha_fin,'%d/%m/%Y') as peri_fecha_fin");
    }
    
    
    public static function detalleRetornar($id){
        $detalle = static::detailById($id,"peri_consecutivoP, peri_nombre, DATE_FORMAT(peri_fecha_inicio,'%d/%m/%Y') as peri_fecha_inicio, DATE_FORMAT(peri_fecha_fin,'%d/%m/%Y') as peri_fecha_fin");

        return $detalle->fetch_assoc();
    }
    
    public static function modificar($data){
        static::query("UPDATE tbl_periodos SET peri_nombre='{$data["peri_nombre"]}', peri_fecha_inicio = STR_TO_DATE('{$data["peri_fecha_inicio"]}', '%d/%m/%Y'), peri_fecha_fin  = STR_TO_DATE('{$data["peri_fecha_fin"]}', '%d/%m/%Y') WHERE peri_consecutivoP= {$data["peri_consecutivoP"]} ");
    }
    
    public static function eliminar($id){
        static::deleteById($id);
    }
}?>