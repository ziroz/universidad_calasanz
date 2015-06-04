<?php

class Url{

    static function getUrl($controller,$action,$params=[]) {

        $url = 'index.php?controller='.$controller.'&action='.$action;
        
        foreach ($params as $key => $value) {
            $url.='&'.$key.'='.$value;
        }
        
        return $url;
    }

}
