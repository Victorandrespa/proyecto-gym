<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/background-clientes.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="../app.js"></script>
    <title>Asignacion</title>
</head>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4 background-image-clientes-asignacion rounded-5 w-50 p-3 border border-dark border-5">

            <body class="container mt-4">


                <div class="container item-group" xyz="fade stagger">
                    <div class="row align-items-center square xyz-in" xyz="inherit up">
                        <!-- Primera columna: Logo -->
                        <div class="col-auto square xyz-in" xyz="inherit up">
                            <img src="<?= base_url('images/evolvere-logo-250.png') ?>" alt="Logo" class="img-fluid">
                        </div>

                        <!-- Segunda columna: 3 elementos alineados -->
                        <div class="col">
                            <div class="d-flex flex-column">
                                <h1 class="mt-5 text-light square xyz-in" xyz="inherit up">ASIGNACIONES</h1>
                                <h4 class="mb-5 text-light square xyz-in" xyz="inherit up">CLIENTE</h4>

                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <a href="verClienteHome" class="btn btn btn-outline-dark text-light border border-light">Home <i class="bi bi-house"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <br><br>



                <!-- Tabla de resultados -->

                <div class="table-responsive h-50 w-75 mx-auto rounded-5">
                    <table class="table table-hover table-bordered">
                        <thead class="table-dark text-center">
                            <tr>
                                <th>ID</th>
                                <th>Clinete </th>
                                <th>Actividad </th>
                                <th>Estado</th>
                                <th>Fecha Reservacion</th>
                                <th class="text-center">Asignacion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($datos as $registro) {
                            ?>
                                <tr>
                                    <td>
                                        <?php echo ($registro['asignacion_id']) ?>
                                    </td>
                                    <td>
                                        <?= $registro['cliente_id']; ?>
                                    </td>
                                    <td>
                                        <?= $registro['actividad_id']; ?>
                                    </td>
                                    <td>
                                        <?= $registro['estado']; ?>
                                    </td>
                                    <td>
                                        <?= $registro['fecha_reservacion']; ?>
                                    </td>
                                    <td class="d-flex justify-content-center gap-2">
                                        <a href="<?= base_url('update_asignacion/') . $registro['asignacion_id']; ?>"
                                            class="btn btn-outline-dark"><i class="bi bi-pin-angle fs-4"></i></a>
                                    </td>

                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>


                <br><br>

            </body>
        </div>
    </div>
</div>

</html>