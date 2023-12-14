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
                $facturas = Facturacion::getFacturacion();
                foreach($facturas as $factus){
            ?>
                <tr>
                    <td><?='NRO-DOC/'.$factus->documento?></td>
                    <td><?='OV/'.$factus->serie?></td>
                    <td><?=$factus->cliente?></td>
                    <td><?=$factus->ruc.' '.$factus->dni?></td>
                    <td><?=$factus->nombres.' '.$factus->ap_paterno.' '.$factus->ap_materno?></td>
                    <td><?=explode(' ',$factus->fecha_movimiento)[0]?></td>
                    <td><?=$factus->pago_inicial?></td>
                    <td><?=$factus->moneda?></td>
                    <td><?=$factus->estado?></td>
                    <td><?=($factus->estado== "P") ? "Pagado" : "Dueda"?></td> 
                </tr>
                <?php }?>
            <tr>
                <td>DOC-002</td>
                <td>OV-54321</td>
                <td>Empresa B</td>
                <td>98765432-1</td>
                <td>Maria González</td>
                <td>2023-11-25</td>
                <td>2800.00</td>
                <td>Euros</td>
                <td>Completado</td>
            </tr>
        </tbody>
    </table>
</div>