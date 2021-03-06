<?php

class matriculasMateriasM extends MasterModel implements InterfazModelos {

    static $table = 'tbl_matriculas_materias';
    static $primary = 'matmat_consecutivoP';

    public static function ingresar($data) {
        ClearText::sanitize($data);
        static::query("INSERT INTO tbl_matriculas_materias(matmat_per_consecutivo, matmat_mat_codigo, matmat_per_consecutivo_docente, matmat_aula, matmat_peri_consecutivo) VALUES ({$data["matmat_per_consecutivo"]},'{$data["matmat_mat_codigo"]}',{$data["matmat_per_consecutivo_docente"]}, '{$data["matmat_aula"]}',{$data["matmat_peri_consecutivo"]})");
    }

    public static function retornar() {
        return static::query("SELECT matmat_consecutivoP, matmat_per_consecutivo, est.per_nombre_completo as per_nombre_completo, matmat_mat_codigo, mat_nombre, doc.per_nombre_completo AS per_nombre_completo_docente, matmat_aula, matmat_peri_consecutivo, peri_nombre, matmat_eva_nota_corte_1 ,matmat_eva_nota_corte_2 , matmat_eva_nota_corte_3  "
                        . "FROM tbl_matriculas_materias "
                        . "JOIN tbl_personas est ON est.per_consecutivoP = matmat_per_consecutivo "
                        . "JOIN tbl_materias ON mat_codigoP = matmat_mat_codigo "
                        . "LEFT JOIN tbl_personas doc ON doc.per_consecutivoP = matmat_per_consecutivo_docente "
                        . "JOIN tbl_periodos  ON peri_consecutivoP = matmat_peri_consecutivo");
    }

    public static function retornarPorEstudiante($estudiante) {
        return static::query("SELECT matmat_consecutivoP, matmat_per_consecutivo, est.per_nombre_completo as per_nombre_completo, matmat_mat_codigo, mat_nombre, doc.per_nombre_completo AS per_nombre_completo_docente, matmat_aula, matmat_peri_consecutivo, peri_nombre, matmat_eva_nota_corte_1 ,matmat_eva_nota_corte_2 , matmat_eva_nota_corte_3, ROUND(((IFNULL(matmat_eva_nota_corte_1,0)+IFNULL(matmat_eva_nota_corte_2,0)+IFNULL(matmat_eva_nota_corte_3,0))/3),1) AS matmat_nota_final   "
                        . "FROM tbl_matriculas_materias "
                        . "JOIN tbl_personas est ON est.per_consecutivoP = matmat_per_consecutivo "
                        . "JOIN tbl_materias ON mat_codigoP = matmat_mat_codigo "
                        . "LEFT JOIN tbl_personas doc ON doc.per_consecutivoP = matmat_per_consecutivo_docente "
                        . "JOIN tbl_periodos  ON peri_consecutivoP = matmat_peri_consecutivo "
                        . "WHERE est.per_consecutivoP = {$estudiante}");
    }

    public static function detalleRetornar($id) {
        $detalle = static::query("SELECT matmat_consecutivoP, matmat_per_consecutivo, est.per_nombre_completo as per_nombre_completo, matmat_mat_codigo, mat_nombre, doc.per_nombre_completo AS per_nombre_completo_docente, matmat_aula, matmat_peri_consecutivo, peri_nombre, matmat_eva_nota_corte_1 ,matmat_eva_nota_corte_2 , matmat_eva_nota_corte_3  FROM tbl_matriculas_materias JOIN tbl_personas est ON est.per_consecutivoP = matmat_per_consecutivo JOIN tbl_materias ON mat_codigoP = matmat_mat_codigo LEFT JOIN tbl_personas doc ON doc.per_consecutivoP = matmat_per_consecutivo_docente JOIN tbl_periodos  ON peri_consecutivoP = matmat_peri_consecutivo WHERE matmat_consecutivoP= $id");
        return $detalle;
    }

    public static function modificar($data) {
        ClearText::sanitize($data);
        static::query("UPDATE tbl_matriculas_materias SET matmat_aula ='{$data["matmat_aula"]}', matmat_per_consecutivo_docente = {$data["matmat_per_consecutivo_docente"]}, matmat_peri_consecutivo = {$data["matmat_peri_consecutivo"]} WHERE matmat_consecutivoP ={$data["matmat_consecutivoP "]}");
    }

    public static function ingresarNotaCorte1($data) {
        ClearText::sanitize($data);
        static::query("UPDATE tbl_matriculas_materias SET matmat_eva_nota_corte_1  ={$data["matmat_eva_nota_corte_1"]} WHERE matmat_consecutivoP ={$data["matmat_consecutivoP"]}");
    }

    public static function ingresarNotaCorte2($data) {
        ClearText::sanitize($data);
        static::query("UPDATE tbl_matriculas_materias SET matmat_eva_nota_corte_2  ={$data["matmat_eva_nota_corte_2"]} WHERE matmat_consecutivoP ={$data["matmat_consecutivoP"]}");
    }

    public static function ingresarNotaCorte3($data) {
        ClearText::sanitize($data);
        static::query("UPDATE tbl_matriculas_materias SET matmat_eva_nota_corte_3  ={$data["matmat_eva_nota_corte_3"]} WHERE matmat_consecutivoP ={$data["matmat_consecutivoP"]}");
    }

    public static function NotaFinal($matmat_consecutivoP) {
        $detalle = static::query("SELECT ROUND(((IFNULL(matmat_eva_nota_corte_1,0)+IFNULL(matmat_eva_nota_corte_2,0)+IFNULL(matmat_eva_nota_corte_3,0))/3),1) AS matmat_nota_final FROM tbl_matriculas_materias WHERE matmat_consecutivoP ={$matmat_consecutivoP}");
        return $detalle[0];
    }

    public static function eliminar($id) {
        static::deleteById($id);
    }
}
