<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('css/background.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <title>Estado Membresías</title>
</head>

<body class="container mt-4 background-image-estado-membresia-admin">

    <div class="container item-group" xyz="fade stagger">
        <div class="row align-items-center">
            <div class="col-auto square xyz-in">
                <img src="<?= base_url('images/evolvere-logo-250.png') ?>" alt="Logo" class="img-fluid">
            </div>
            <div class="col">
                <div class="d-flex flex-column">
                    <h1 class="mt-5 text-light square xyz-in">ESTADO MEMBRESÍA <i class="bi bi-bar-chart"></i></h1>
                    <h4 class="mb-5 text-light square xyz-in">ADMIN</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row justify-content-between align-items-center item-group" xyz="fade stagger">
        <a href="verAdminHome" class="btn btn-outline-dark text-light border border-light ms-5 square xyz-in">
            Home <i class="bi bi-house"></i>
        </a>

        <!-- Botón para abrir el modal -->
        <button type="button" class="btn btn-outline-dark my-2 text-light border border-light square xyz-in"
            data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Estado <i class="bi bi-credit-card"></i>
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Pago</h1>
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

                        <label for="txt_membresia_id" class="form-label">Membresía ID:</label>
                        <select name="txt_membresia_id" id="txt_membresia_id" class="form-control" required>
                            <option value="">-- Seleccione Membresía --</option>
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

                        <label for="txt_metodo_pago" class="form-label">Método de pago:</label>
                        <select name="txt_metodo_pago" id="txt_metodo_pago" class="form-control" required>
                            <option value="">- Método de pago -</option>
                            <option value="Tarjeta" <?= (isset($datos['metodo_pago']) && $datos['metodo_pago'] == 'Tarjeta') ? 'selected' : '' ?>>Tarjeta</option>
                            <option value="Efectivo" <?= (isset($datos['metodo_pago']) && $datos['metodo_pago'] == 'Efectivo') ? 'selected' : '' ?>>Efectivo</option>
                        </select>

                        <label for="txt_concepto" class="form-label">Concepto:</label>
                        <input type="text" name="txt_concepto" id="txt_concepto" class="form-control">

                        <div class="d-flex justify-content-center mt-3">
                            <!-- Confirmación antes de enviar el formulario -->
                            <button type="submit"
                                class="btn btn-outline-dark mt-2 justify-content-center"
                                data-confirm
                                data-method="form"
                                data-confirm-title="¿Guardar estado?"
                                data-confirm-text="Se registrará un nuevo estado de membresía.">
                                Guardar
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <br><br>

    <!-- Tabla de resultados -->
    <div class="table-responsive h-75 mx-auto rounded-5">
        <table class="table table-hover table-bordered">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Membresía</th>
                    <th>Cliente</th>
                    <th>Fecha de inicio</th>
                    <th>Fecha fin</th>
                    <th>Estado</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $registro): ?>
                    <tr>
                        <td><?= $registro['estado_membresia_id']; ?></td>
                        <td><?= $registro['membresia_id']; ?></td>
                        <td><?= $registro['cliente_id']; ?></td>
                        <td><?= $registro['fecha_inicio']; ?></td>
                        <td><?= $registro['fecha_fin']; ?></td>
                        <td><?= $registro['estado']; ?></td>

                        <td class="d-flex justify-content-center gap-2">
                            <a href="<?= base_url('update_estado_membresia/') . $registro['estado_membresia_id']; ?>"
                                class="btn btn-outline-dark">
                                <i class="bi bi-pencil"></i>
                            </a>

                            <!-- Confirmación antes de eliminar -->
                            <a href="<?= base_url('eliminar_estado_membresia/') . $registro['estado_membresia_id']; ?>"
                                class="btn btn-outline-danger"
                                data-confirm
                                data-confirm-title="¿Eliminar estado?"
                                data-confirm-text="Esta acción no se puede deshacer."
                                data-confirm-icon="warning">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <br><br>

    <?= view('partials/alerts_footer') ?>
    <script src="<?= base_url('js/app.js'); ?>"></script>

</body>
</html>
