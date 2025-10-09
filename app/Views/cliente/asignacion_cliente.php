<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="../app.js"></script>
    <title>Asignacion</title>
</head>

<body class="container mt-4">


    <h1 class="mt-5">Asignaciones <i class="bi bi-calendar-check"></i></h1>
    <h4 class="mb-5">Cliente</h4>
    <!-- <a href="log" class="btn btn-outline-dark">LOG IN <i class="bi bi-people-fill"></i></a>
    <br> -->


    <div class="d-flex flex-row justify-content-between align-items-center">
        <a href="cliente_home.html" class="btn btn btn-outline-dark">Home <i class="bi bi-house"></i></a>
    </div>


    <br><br>



    <!-- Tabla de resultados -->

    <table class="table mt-5 table-hover table-bordered">
        <thead class="table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Nombre </th>
                <th>Apellido </th>
                <th>Edad </th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Contacto de Emergencia</th>
                <th>Telefono de Emergencia</th>
                <th>Fecha de Registro</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($datos as $registro) {
            ?>
                <tr>
                    <td>
                        <?php echo ($registro['cliente_id']) ?>
                    </td>
                    <td>
                        <?= $registro['nombre']; ?>
                    </td>
                    <td>
                        <?= $registro['apellido']; ?>
                    </td>
                    <td>
                        <?= $registro['edad']; ?>
                    </td>
                    <td>
                        <?= $registro['telefono']; ?>
                    </td>
                    <td>
                        <?= $registro['email']; ?>
                    </td>
                    <td>
                        <?= $registro['contacto_emergencia']; ?>
                    </td>
                    <td>
                        <?= $registro['telefono_emergencia']; ?>
                    </td>
                    <td>
                        <?= $registro['fecha_registro']; ?>
                    </td>

                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>







</body>

</html>