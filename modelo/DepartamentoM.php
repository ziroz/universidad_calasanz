<?php 
class DepartamentoM {
    public static function insertar($data){
        mysql_query("INSERT INTO departamento(nombre) VALUES ('{$data["nombre"]}')");  
    }
    
    public static function getAll(){
        return mysql_query("SELECT * FROM departamento");
    }
    
    
    public static function getElement($id){
        $detalle = mysql_query("SELECT * FROM departamento where id='$id'");
        return mysql_fetch_assoc($detalle);
    }
    
    public static function modificar($data){
        mysql_query("update departamento set nombre='{$data["nombre"]}' where id='{$data["id"]}'");
    }
    public static function eliminar($id){
        mysql_query("delete FROM departamento where id='$id'");
    }
}