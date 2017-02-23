<?php

class MasterModel {

    protected static $table;
    protected static $primary;
    static $link;

    public static function connect() {
        //static::$link = new PDO('mysql:host=' . DB_SERVER . ';dbname=' . DB_DBASE . ';charset=utf8', DB_USERNAME, DB_PASS);
         static::$link = new PDO("sqlsrv:server = ' . DB_SERVER . '; Database = ' . DB_DBASE . '", "'.DB_USERNAME.'", "'.DB_PASS.'");
    }

    public static function query($sql) {
        try {
            static::connect();
            $result = static::$link->query($sql);
        } catch (PDOException $ex) {
            die('Error executing : ' . $sql . " err:" . $ex);
        }
        static::close();
        if($result)
        {
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public static function close() {
        static::$link = null;
    }

    //CRUD FUNCTIONS 

    public static function all($fields = '*') {
        return static::query("SELECT " . $fields . " FROM " . static::$table);
    }

    public static function detailById($id, $fields = '*') {
        ClearText::sanitize($id);
        $detalle = static::query("SELECT " . $fields . " FROM " . static::$table . " WHERE " . static::$primary . " = '" . $id . "'");
        return $detalle[0];
    }

    public static function deleteById($id) {
        ClearText::sanitize($id);
        return static::query("DELETE FROM " . static::$table . " WHERE " . static::$primary . " = '$id'");
    }

}
