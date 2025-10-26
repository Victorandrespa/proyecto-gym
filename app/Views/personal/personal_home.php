<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/background-personal.css'); ?>">
    <title>Personal</title>
</head>

<body class="container mt-4 background-image-personal-main">


    <div class="container">
        <div class="row align-items-center">
            <!-- Primera columna: Logo -->
            <div class="col-auto">
                <img src="<?= base_url('images/logo-white-char250.png') ?>" alt="Logo" class="img-fluid">
            </div>

            <!-- Segunda columna: 3 elementos alineados -->
            <div class="col">
                <div class="d-flex flex-column">
                    <h1 class="mt-5 text-light">GESTIONES ADMINISTRATIVAS</h1>
                    <h4 class="mb-5 text-light">ENTRENADORES</h4>
                </div>

                <div class="d-flex flex-row justify-content-between align-items-center">
                    <a href="verHome" class="btn btn btn-outline-dark text-light border border-light">Menu Principal <i class="bi bi-house"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-around mt-3">

        <div class="d-grid gap-2 mt-5" style="width: 50%;">
            <a href="verActividadPersonal" class="btn btn-outline-dark fs-4 text-light rounded-pill border border-light">Gestionar Actividades <i
                    class="bi bi-flag"></i></a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-dark fs-4 text-light rounded-pill border border-light" data-bs-toggle="modal"
                data-bs-target="#exampleModal2">
                Registro de Clientes <i class="bi bi-person"></i>
            </button>

            <a href="verClientePersonal" class="btn btn-outline-dark fs-4 text-light rounded-pill border border-light">Base de datos Clientes <i
                    class="bi bi-database"></i></a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-dark fs-4 text-light rounded-pill border border-light" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Procesar un pago <i class="bi bi-credit-card"></i>
            </button>


            <a href="verEstadoMembresiaCliente" class="btn btn-outline-dark fs-4 text-light rounded-pill border border-light">Estado membresia <i
                    class="bi bi-file-person"></i></a>


            <a href="verHistorialMedicionPersonal" class="btn btn-outline-dark fs-4 text-light rounded-pill border border-light">Historial Medicion <i
                    class="bi bi-clipboard-check"></i></a>




        </div>

    </div>


    <!-- Modal Pagos  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Realizar un Pago</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="agregarPagoPersonal" method="post">

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


    <!-- Modal Clientes -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="agregarCliente" method="post">

                        <label for="txt_cliente_id" class="form-label">Cliente ID:</label>
                        <input type="text" name="txt_cliente_id" id="txt_cliente_id" class="form-control">

                        <label for="txt_nombre" class="form-label">Nombre:</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">

                        <label for="txt_apellido" class="form-label">Apellido:</label>
                        <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">

                        <label for="txt_edad" class="form-label">Edad:</label>
                        <input type="number" name="txt_edad" id="txt_edad" class="form-control">

                        <label for="txt_telefono" class="form-label">Telefono:</label>
                        <input type="number" name="txt_telefono" id="txt_telefono" class="form-control">

                        <label for="txt_email" class="form-label">Email:</label>
                        <input type="email" name="txt_email" id="txt_email" class="form-control">

                        <label for="txt_contacto_emergencia" class="form-label">Contacto de Emergencia:</label>
                        <input type="text" name="txt_contacto_emergencia" id="txt_contacto_emergencia"
                            class="form-control">

                        <label for="txt_telefono_emergencia" class="form-label">Telefono de Emergencia:</label>
                        <input type="number" name="txt_telefono_emergencia" id="txt_telefono_emergencia"
                            class="form-control">

                        <label for="txt_fecha_registro" class="form-label">Fecha de Registro:</label>
                        <input type="date" name="txt_fecha_registro" id="txt_fecha_registro" class="form-control">

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






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>


</body>

</html>