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
                <th>Activiadad</th>
                <th>Personal</th>
                <th>Clase</th>
                <th>Modalidad</th>
                <th>Nivel</th>
                <th>Cupo</th>
                <th class="text-center">Asignacion</th>
        </thead>
        <tbody>
            <?php
                foreach ($datos as $registro) {
                    ?>
            <tr>
                <td>
                    <?php echo ($registro['actividad_id']) ?>
                </td>
                <td>
                    <?= $registro['personal_id']; ?>
                </td>
                <td>
                    <?= $registro['nombre']; ?>
                </td>
                <td>
                    <?= $registro['modalidad']; ?>
                </td>
                <td>
                    <?= $registro['nivel']; ?>
                </td>
                <td>
                    <?= $registro['cupo_maximo']; ?>
                </td>
                



                <td class="d-flex justify-content-center gap-2 ">
                    <a href="<?= base_url('update_actividad/') . $registro['actividad_id']; ?>"
                        class="btn btn-outline-dark"><i class="bi bi-pencil"></i></a>
                    <a href="<?= base_url('eliminar_actividad/') . $registro['actividad_id']; ?>"
                        class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
            <?php
                }
                ?>
        </tbody>
    </table>







</body>

</html>