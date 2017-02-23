<?php
//DATABASE CONFIGURATIONS (change to the correct values)
define("DB_SERVER", 'tcp:ciro.database.windows.net,1433');
define("DB_USERNAME", 'ciro');
define("DB_PASS", 'sql12345_'); 
define("DB_DBASE", 'db_uni_calasaz');

//-----------DO NOT CHANGE ------------------------

//SERVER CONFIGURATIONS (It is not recommended change this values)
define("BASE_PATH",'localhost');
define("BASE_MODELS",'/modelos');
define("BASE_CONTROLLERS",'/controladores');
define("BASE_VIEWS",'/vistas');
define("BASE_CLASSES",'/clases');
define("BASE_CONFIG",'/config');


//load the folders
$folders = [BASE_CLASSES , BASE_MODELS, BASE_CONTROLLERS];
foreach ($folders as $folder) {   
    
    foreach (glob(".{$folder}/*.php") as $file) {
        require  $file;
    }    
}


 
