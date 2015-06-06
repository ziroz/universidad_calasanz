
<?php

class Session {

    private static $PermisosRoles = [
        "1" => ['programas','materias','seguridad'],
        "2" => [ 'estudiantes','seguridad'],
        "3" => ['programas', 'materias', 'periodos','estudiantes','docentes', 'seguridad','programasmaterias']
    ];

    public static function validatePermission($controller,$action) {
        $usuario = Session::getUser();
        
        if(count($usuario)==0){
            if($action != "Login")
            {
                $urlReturn = $controller == "Seguridad" ? "" : urlencode(Url::getUrl($controller, $action));
                Redirect::to(Url::getUrl("Seguridad", "Login", ['returnUrl'=> $urlReturn ]));
            }
        }else{
            if(!static::hasPermission($controller)){
                App::abort(404);
            }
        }
    }
    
    public static function hasPermission($controller) {
        $usuario = Session::getUser();
        $permisos = static::$PermisosRoles[$usuario["rol"]];

        return in_array(strtolower($controller), $permisos);
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

?>
