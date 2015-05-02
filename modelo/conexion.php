<?php

mysql_connect("localhost", "root", "");
mysql_select_db("db_uni_calasaz");


require '../modelo/programasM.php';
require '../modelo/materiasM.php';
require '../modelo/periodosM.php';
require '../modelo/estudiantesM.php';
require '../modelo/docentesM.php';
require '../modelo/matriculasMateriasM.php';

