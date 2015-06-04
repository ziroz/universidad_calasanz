<?php

class View {

    public static function load($path, $data = []) {
        extract($data);   //every key now is a variable :)
        require "./" . BASE_VIEWS . "/$path.php";
    }

    public static function loadModal($data) {
        extract($data);   //every key now is a variable :)
        require "./" . BASE_VIEWS . "/include/modal.php";
    }

    public static function initAssets($name) {
        static::listar_directorios_ruta("." . BASE_VIEWS . "/assets/",$name);
    }

    static function listar_directorios_ruta($ruta, $nameFile) {
        // abrir un directorio y listarlo recursivo 
        if (is_dir($ruta)) {
            if ($dh = opendir($ruta)) {
                while (($file = readdir($dh)) !== false) {
                    //esta línea la utilizaríamos si queremos listar todo lo que hay en el directorio 
                    //mostraría tanto archivos como directorios 
                    if (is_dir($ruta . $file) && $file != "." && $file != "..") {
                        //solo si el archivo es un directorio, distinto que "." y ".." 
                        $result = glob($ruta . $file . "/" . $nameFile);
                        if (count($result) > 0) {
                            $infoFile = pathinfo($result[0], PATHINFO_EXTENSION);
                            $urlFile = $ruta . $file . "/" . $nameFile;
                            if ($infoFile == "js") {
                                echo "<script type='text/javascript' src='{$urlFile}'></script>";
                                closedir($dh);
                                break;
                            } else
                            if ($infoFile == "css") {
                                echo "<link rel='stylesheet' href='{$urlFile}'/>";
                                closedir($dh);
                                break;
                            }
                        }
                        static::listar_directorios_ruta($ruta . $file . "/",$nameFile);
                    }
                }
            }
        }
    }

}
