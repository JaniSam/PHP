
<div>
    <h1>Ciudades | Sistema de Gestión de Ciudades</h1>
</div class="bg-primary text-white text-center">

    <p>Detalle de la Ciudad: </p>

<table class="my-table">
    <thead>
        <tr>
            <th class="text-center">
                ID
            </th class="text-left">
            <th>
                CIUDAD
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-center">
                {{$ciudad->id}}
            </td>
            <td>
                {{$ciudad->nombre}}
            </td>
        </tr>
    </tbody>
</table>

<i>Descargado: {{$fecha}}</i>