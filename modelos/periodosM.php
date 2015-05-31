<?php 
class periodosM {
    
    public static function ingresar($data){
        $query = "INSERT INTO tbl_periodos(peri_nombre, peri_fecha_inicio , peri_fecha_fin) VALUES ('{$data["peri_nombre"]}',STR_TO_DATE('{$data["peri_fecha_inicio"]}', '%d/%m/%Y'),STR_TO_DATE('{$data["peri_fecha_fin"]}', '%d/%m/%Y'))";
        mysql_query($query);  
    }
    public static function retornar(){
        return mysql_query("SELECT peri_consecutivoP, peri_nombre, DATE_FORMAT(peri_fecha_inicio,'%d/%m/%Y') as peri_fecha_inicio, DATE_FORMAT(peri_fecha_fin,'%d/%m/%Y') as peri_fecha_fin FROM tbl_periodos");
    }
    
    
    public static function detalleRetornar($peri_consecutivoP){
        $detalle = mysql_query("SELECT peri_consecutivoP, peri_nombre, DATE_FORMAT(peri_fecha_inicio,'%d/%m/%Y') as peri_fecha_inicio, DATE_FORMAT(peri_fecha_fin,'%d/%m/%Y') as peri_fecha_fin FROM tbl_periodos WHERE peri_consecutivoP=$peri_consecutivoP");
        return mysql_fetch_assoc($detalle);
    }
    
    public static function modificar($data){
        mysql_query("UPDATE tbl_periodos SET peri_nombre='{$data["peri_nombre"]}', peri_fecha_inicio = STR_TO_DATE('{$data["peri_fecha_inicio"]}', '%d/%m/%Y'), peri_fecha_fin  = STR_TO_DATE('{$data["peri_fecha_fin"]}', '%d/%m/%Y') WHERE peri_consecutivoP= {$data["peri_consecutivoP"]} ");
    }
    
    public static function eliminar($peri_consecutivoP){
        mysql_query("DELETE FROM tbl_periodos where peri_consecutivoP = $peri_consecutivoP ");
    }
}?>