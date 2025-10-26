<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/background.css'); ?>">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="../app.js"></script>

    <title>Pagos</title>
</head>

<body class="container mt-4 background-image-pagos-admin">


    <div class="container">
        <div class="row align-items-center">
            <!-- Primera columna: Logo -->
            <div class="col-auto">
                <img src="<?= base_url('images/logo-white-char250.png') ?>" alt="Logo" class="img-fluid">
            </div>

            <!-- Segunda columna: 3 elementos alineados -->
            <div class="col">
                <div class="d-flex flex-column">
                    <h1 class="mt-5 text-light">GESTION DE PAGOS <i class="bi bi-cash-stack"></i></h1>
                    <h4 class="mb-5 text-light">ADMIN</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row justify-content-between align-items-center">

        <a href="verAdminHome" class="btn btn btn-outline-dark ms-5 text-light">Home <i class="bi bi-house"></i></a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-dark my-2 text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Realizar un Pago <i class="bi bi-plus-circle"></i>
        </button>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Realizar un Pago</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="agregarPagoAdmin" method="post">

                        <input type="hidden" name="txt_pago_id" id="txt_pago_id" class="form-control">

                        <label for="txt_cliente_id" class="form-label">Cliente ID:</label>
                        <select name="txt_cliente_id" id="txt_cliente_id" class="form-control" required>
                            <option value="">-- Seleccione Cliente --</option>
                            <?php foreach ($clientes as $c): ?>
                                <option value="<?= $c['cliente_id'] ?>">
                                    <?= $c['cliente_id'] . ' - ' . $c['nombre'] . ' - ' . $c['apellido'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>

                        <label for="txt_membresia_id" class="form-label">Membresia ID:</label>
                        <select name="txt_membresia_id" id="txt_membresia_id" class="form-control" required>
                            <option value="">-- Seleccione Membresia --</option>
                            <?php foreach ($membresias as $m): ?>
                                <option value="<?= $m['membresia_id'] ?>">
                                    <?= $m['membresia_id'] . ' - ' . $m['tipo_plan'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>

                        <label for="txt_fecha_pago" class="form-label">Fecha de pago:</label>
                        <input type="date" name="txt_fecha_pago" id="txt_fecha_pago" class="form-control">

                        <label for="txt_monto" class="form-label">Monto:</label>
                        <input type="number" name="txt_monto" id="txt_monto" class="form-control">

                        <label for="txt_metodo_pago" class="form-label">Metodo de pago::</label>
                         <select name="txt_metodo_pago" id="txt_metodo_pago" class="form-control" required>
                            <option value="">- Metodo de pago -</option>
                            <option value="Activo" <?= (isset($datos['metodo_pago']) && $datos['metodo_pago'] == 'Tarjeta') ? 'selected' : '' ?>>Tarjeta</option>
                            <option value="Inactivo" <?= (isset($datos['metodo_pago']) && $datos['metodo_pago'] == 'Efectivo') ? 'selected' : '' ?>>Efectivo</option>
                        </select>

                        <label for="txt_concepto" class="form-label">Concepto:</label>
                        <input type="text" name="txt_concepto" id="txt_concepto" class="form-control">

                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit"
                                class="btn btn-outline-dark mt-2 justify-content-center">Guardar</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>




    <br><br>



    <!-- Tabla de resultados -->

    <table class="table mt-5 table-hover table-bordered">
        <thead class="table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Membresia</th>
                <th>Fecha de pago</th>
                <th>Monto</th>
                <th>Metodo de pago</th>
                <th>Concepto</th>
                <th class="text-center">Editar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($datos as $registro) {
            ?>
                <tr>
                    <td>
                        <?php echo ($registro['pago_id']) ?>
                    </td>
                    <td>
                        <?= $registro['cliente_id']; ?>
                    </td>
                    <td>
                        <?= $registro['membresia_id']; ?>
                    </td>
                    <td>
                        <?= $registro['fecha_pago']; ?>
                    </td>
                    <td>
                        <?= $registro['monto']; ?>
                    </td>
                    <td>
                        <?= $registro['metodo_pago']; ?>
                    </td>
                    <td>
                        <?= $registro['concepto']; ?>
                    </td>

                    <td class="d-flex justify-content-center gap-2 ">
                        <a href="<?= base_url('update_pago/') . $registro['pago_id']; ?>"
                            class="btn btn-outline-dark"><i class="bi bi-pencil"></i></a>
                        <a href="<?= base_url('eliminar_pago/') . $registro['pago_id']; ?>"
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