<?php

class MasterController {

    private static $defaultMethod = 'index';
    private static $controllerSuffix = 'Controller';

    static function init() {
        //load the application's controllers/classes/models.       
        require './config/boot.php';
    }

    static function execute($request) {
        static::init();        
        
        if (!static::isValidRequest($request)) {            
            App::abort(0);
        }        

        $controller = ucfirst($request['controller']) . ucfirst(static::$controllerSuffix);
        $action = isset($request['action']) ? $request['action'] : static::$defaultMethod;

        //check if the request is GET/POST
        $isPost = $_SERVER['REQUEST_METHOD'] == 'POST';

        $method = ($isPost) ? 'post' : 'get';
        $method.= ucfirst($action);


        //create a new object and call the respective method
        $ctr = new $controller();
        $ctr->{$method}(static::getParams($request));
    }

    static function isValidRequest($request) {        
        return isset($request['controller']) ;
    }   
    
    
    static function getParams($request){           
        unset($request['controller']);
        unset($request['action']);
        return $request;
    }

}

MasterController::execute($_REQUEST);






