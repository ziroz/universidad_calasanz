<?php

class App{

    static function abort($code) {

        switch ($code) {
            case 0:
                echo 'Invalid Request';
                break;
            case 404:
                echo 'Not found';
                break;
        }
        
        exit;
    }

}
