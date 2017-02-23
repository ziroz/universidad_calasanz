<?php

class App {

    static function abort($code) {
        echo 'abort';
/*
        switch ($code) {
            case 0:
                Redirect::to('vistas/Shared/Error400.php');
                break;
            case 404:
                Redirect::to('vistas/shared/Error404.php');
                break;
            case 401:
                Redirect::to('vistas/shared/Error401.php');
                break;
        }
*/
        exit;
    }

}
