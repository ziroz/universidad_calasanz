<?php

class Session {

    private static $PermisosRoles = [
        "Docentes" => [],
        "Estudiante" => [],
        "Administrativo" => ['programas', 'materias', 'periodos', 'seguridad']
    ];

    public static function validatePermission($controller,$action) {
        $usuario = Session::getUser();
        
        if(count($usuario)==0){
            if($controller !=="Seguridad")
            {
                Redirect::to(Url::getUrl("Seguridad", "Login", ['returnUrl'=>  urlencode(Url::getUrl($controller, $action))]));
            }
        }else{
            $permisos = static::$PermisosRoles[$usuario["rol"]];
            if(!in_array(strtolower($controller), $permisos)){
                App::abort(404);
            }
        }
    }

    public static function initSesion($persona) {
        $_SESSION["UsuarioSesion"] = $persona[0];
    }

    public static function closeSesion() {
        session_destroy();
    }
    
    public static function getUser() {
        return isset($_SESSION["UsuarioSesion"]) ? $_SESSION["UsuarioSesion"] : [];
    }

}
