<h2 style="text-align:center; margin-bottom: 8px;">Listado de Órdenes de Venta</h2>
<span style="font-weight: 600; width:fit-content;">Filtrar por Cliente: <input type="text" style="width: 240px;"></span><button class="modal__btn--search">Buscar</button>
<div style="margin:8px 0;">
    <label for="facturable">Facturable</label>
    <input type="radio" id="facturable" name="facturabilidad" value="facturable" checked style="margin-right: 16px">

    <label for="no_facturable">No Facturable</label>
    <input type="radio" id="no_facturable" name="facturabilidad" value="no_facturable">
</div>
<hr>
<div class="modal__table--container">
    <table class="table">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Orden</th>
                <th>Fecha Emisión</th>
                <th>Tipo de Pago</th>
                <th>Importe</th>
                <th>Moneda</th>
                <th>Vendedor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nombre Cliente 1</td>
                <td>Orden 123</td>
                <td>2023-12-01</td>
                <td>Efectivo</td>
                <td>250.00</td>
                <td>Dólares</td>
                <td>Nombre del Vendedor</td>
            </tr>
            <tr>
                <td>Nombre Cliente 2</td>
                <td>Orden 456</td>
                <td>2023-12-03</td>
                <td>Tarjeta de Crédito</td>
                <td>150.00</td>
                <td>Euros</td>
                <td>Otro Nombre de Vendedor</td>
            </tr>
        </tbody>
    </table>
</div>