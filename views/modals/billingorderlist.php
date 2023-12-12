<h2 style="text-align:center; margin-bottom: 8px;">Listado de Facturación</h2>
<div style="display: flex; align-items: center; gap: 10px;">
    <label for="fechaInicio">Fecha INICIO:</label>
    <input type="date" class="form-control" id="fechaInicio" name="fechaInicio">

    <label for="fechaFin">Fecha FIN:</label>
    <input type="date" class="form-control" id="fechaFin" name="fechaFin">
</div>
<hr>
<div class="modal__table--container">
    <table class="table">
        <thead>
            <tr>
                <th>Nro de Documento</th>
                <th>Orden de Venta</th>
                <th>Cliente</th>
                <th>Documento Cliente</th>
                <th>Vendedor</th>
                <th>Fecha de Emisión</th>
                <th>Monto</th>
                <th>Moneda</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
        <?php
            require_once('../../Models/Facturacion.php');
            $factura = Facturacion::getListarFacturacion();
            foreach($factura as $factu){
           ?>
            <tr>
                <td><?=$factu->NROFACT?></td>
                <td><?=$factu->id_venta.$factu->serieventa?></td>
                <td><?=$factu->razon_social?></td>
                <td><?=$factu->ruc?></td>
                <td><?=$factu->id_personal?></td>
                <td><?=explode(' ',$factu->fecha_movimiento)[0]?></td>
                <td><?=$factu->Sub_Total?></td>
                <td><?=$factu->id_moneda?></td>
                <td><?=$factu->estado?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>