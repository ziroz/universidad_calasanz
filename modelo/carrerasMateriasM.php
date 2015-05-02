



<?php 
class carrerasMateriasM {
    
    public static function ingresar($data){
        mysql_query("INSERT INTO tbl_carreras_materias(carmat_mat_codigo, carmat_car_codigo, carmat_ciclo) VALUES ('{$data["carmat_mat_codigo"]}','{$data["carmat_car_codigo"]}','{$data["carmat_ciclo"]}')");  
    }
    
    public static function retornar(){
        return mysql_query("SELECT mat_codigoP, mat_nombre,mat_horas_semanales,carmat_ciclo  FROM tbl_carreras_materias JOIN tbl_materias ON mat_codigoP  = carmat_mat_codigo ");
    }
    
    
    public static function detalleRetornar($carmat_consecutivoP){
        $detalle = mysql_query("SELECT carmat_mat_codigo, carmat_car_codigo, carmat_ciclo , car_nombre, mat_nombre FROM tbl_carreras_materias JOIN tbl_materias ON carmat_mat_codigo = mat_codigoP JOIN tbl_carreras  ON  carmat_car_codigo = car_codigoP WHERE carmat_consecutivoP= $carmat_consecutivoP");
        return mysql_fetch_assoc($detalle);
    }
    
    public static function modificar($data){
        mysql_query("UPDATE tbl_carreras_materias SET carmat_ciclo='{$data["carmat_ciclo"]} WHERE carmat_consecutivoP = {$data["carmat_consecutivoP "]} ");
    }
    public static function eliminar($carmat_consecutivoP ){
        mysql_query("DELETE FROM tbl_carreras_materias WHERE carmat_consecutivoP =$carmat_consecutivoP ");
    }
}


