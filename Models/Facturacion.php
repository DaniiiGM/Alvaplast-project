<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/Alvaplast-project/config/connection.php');

class Facturacion{
    

    public static function getFacturacion(){
        $con = Connection::Conectar();
        $data = $con->query("exec sp_ListarFacturacionXAlmacen 2");
        return $data->fetchAll(PDO::FETCH_OBJ);
    }
    public static function getListarFacturacion(){
        $con = Connection::Conectar();
        
        // Consulta preparada para obtener productos filtrados de lo que se desea - Facturacion
        $factu = $con->prepare("exec sp_ListarFacturacionXAlmacen 2 :NROFACT , :orden , :cliente , :RUC , :personal , :fecha , :monto , :moneda ,:estado");
        $factu->bindParam(":NROFACT", $NROFACT, PDO::PARAM_INT,25);
        $factu->bindParam(":orden", $serieventa, PDO::PARAM_INT,10);
        $factu->bindParam(":cliente", $razon_social, PDO::PARAM_STR,50);
        $factu->bindParam(":RUC", $ruc, PDO::PARAM_INT,15);
        $factu->bindParam(":personal", $id_personal, PDO::PARAM_STR,15);
        $factu->bindParam(":orden", $fecha_movimiento, PDO::PARAM_INT,20);
        $factu->bindParam(":monto", $Sub_Total, PDO::PARAM_INT,20);
        $factu->bindParam(":moneda", $id_moneda, PDO::PARAM_INT,20);
        $factu->bindParam(":estado", $estado, PDO::PARAM_INT,5);
        $factu->execute();
        
        // Se retornan los resultados en formato de objeto.
        return $factu->fetchAll(PDO::FETCH_OBJ);
    }
}

?>