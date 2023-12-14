<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/Alvaplast-project/config/connection.php');

class Facturacion{
    

    public static function getFacturacion(){
        $con = Connection::Conectar();
        $data = $con->query("exec sp_ListarFacturacionXAlmacen 2");
        return $data->fetchAll(PDO::FETCH_OBJ);
    }
    public static function getFacturacionXAlmacenYFecha(string $fechaIni, string $fechaFin, int $id_almacen): array {
        $con = Connection::Conectar();
        $tsmt = $con->prepare("exec sp_ListarFacturacionXAlmacenYFecha :fechaini, :fechafin, :almacen");
        
        // Formatear fechas al formato 'YYYY-MM-DD' si no están en este formato
        $fechaIniFormatted = date("Y-m-d", strtotime($fechaIni - 1));
        $fechaFinFormatted = date("Y-m-d", strtotime($fechaFin + 1));
    
        $tsmt->bindParam(":fechaini", $fechaIniFormatted, PDO::PARAM_STR);
        $tsmt->bindParam(":fechafin", $fechaFinFormatted, PDO::PARAM_STR);
        $tsmt->bindParam(":almacen", $id_almacen, PDO::PARAM_INT);
        
        $tsmt->execute();
        return $tsmt->fetchAll(PDO::FETCH_OBJ);
    }
}
?>