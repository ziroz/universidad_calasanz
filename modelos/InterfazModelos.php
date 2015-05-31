<?php

interface InterfazModelos{
    public static function retornar();
    public static function detalleRetornar($id);
    public static function ingresar($data);
    public static function modificar($data);
    public static function eliminar($id);
}

