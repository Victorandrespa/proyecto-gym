<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Historial Medicion</title>
</head>

<body class="container mt-4">


    <h1 class="mt-5">Historial de Medicion</h1>
    <h4 class="mb-5">Cliente</h4>
    <!-- <a href="log" class="btn btn-outline-dark">LOG IN <i class="bi bi-people-fill"></i></a>
    <br> -->

    <!-- Modal para agregar usuario -->

    <div class="d-flex flex-row justify-content-between align-items-center">

        <a href="cliente_home.html" class="btn btn btn-outline-dark">Home <i class="bi bi-house"></i></a>

    </div>


    <br><br>


    <!-- Tabla de resultados -->

    <table class="table mt-5 table-hover table-bordered">
        <thead class="table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Plan</th>
                <th>Cliente</th>
                <th>Fecha Medicion</th>
                <th>Peso</th>
                <th>Altura</th>
                <th>IMC</th>
                <th>Calorias</th>
                <th>Observaciones</th>
        </thead>
        <tbody>
            <?php
            foreach ($datos as $registro) {
                ?>
                <td>
                    <?php echo ($registro['medicion_id']) ?>
                </td>
                <td>
                    <?= $registro['plan_id']; ?>
                </td>
                <td>
                    <?= $registro['cliente_id']; ?>
                </td>
                <td>
                    <?= $registro['fecha_medicion']; ?>
                </td>
                <td>
                    <?= $registro['peso']; ?>
                </td>
                <td>
                    <?= $registro['altura']; ?>
                </td>
                <td>
                    <?= $registro['indice_masaCorporal']; ?>
                </td>
                <td>
                    <?= $registro['promedio_calorias']; ?>
                </td>
                <td>
                    <?= $registro['observaciones']; ?>
                </td>

                <?php
            }
            ?>
        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="../app.js"></script>


</body>

</html>