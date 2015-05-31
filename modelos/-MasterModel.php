<?php

class MasterModel {

    protected static $table;
    protected static $primary;

    static $link;

    public static function connect() {
        static::$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASS, DB_DBASE);
    }

    public static function query($sql) {
        static::connect();
        $result = mysqli_query(static::$link, $sql) or die('Error executing : ' . $sql . " err:" . mysqli_errno(static::$link));
        static::close();
        return $result;
    }

    public static function close() {
        mysqli_close(static::$link);
    }

    public static function sanitize($sql) {
        return addslashes($sql);
    }

    //CRUD FUNCTIONS 

    public static function all($fields = '*') {
        return static::query("SELECT " . $fields . " FROM " . static::$table);
    }

    public static function detailById($id, $fields = '*') {
        
        return static::query("SELECT " . $fields . " FROM " . static::$table . " WHERE ".static::$primary." = '".static::sanitize($id)."'");
    }

    public static function deleteById($id) {
        return static::query("DELETE FROM " . static::$table . " WHERE ".static::$primary." = '$id'");
    }

}
