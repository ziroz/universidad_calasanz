<?php

class seguridadM extends MasterModel{

    static $table = 'tbl_personas';
    
    public static function retornar($data) {
        ClearText::sanitize($data);
        return static::query("SELECT 'Administrativo' as rol,per_nombre_completo FROM ".static::$table." WHERE per_usu_nombre='{$data["per_usu_nombre"]}' AND per_usu_contrasena = '{$data["per_usu_contrasena"]}'");
    }
}

?>