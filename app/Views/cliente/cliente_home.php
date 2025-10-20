<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/background-clientes.css'); ?>">
    <title>Cliente</title>
</head>

<body class="container mt-4 background-image-clientes-main">

    <div class="container">
        <div class="row align-items-center">
            <!-- Primera columna: Logo -->
            <div class="col-auto">
                <img src="<?= base_url('images/logo-white-char250.png') ?>" alt="Logo" class="img-fluid">
            </div>

            <!-- Segunda columna: 3 elementos alineados -->
            <div class="col">
                <div class="d-flex flex-column">
                    <h1 class="mt-5 text-light">CLIENTE APP</h1>
                    <h4 class="mb-5 text-light">BIENVENIDO!</h4>

                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <a href="verHome" class="btn btn btn-outline-dark text-light border border-light">Menu Principal <i class="bi bi-house"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-around mt-3">

        <div class="d-grid gap-2 mt-5" style="width: 50%;">
            <a href="verAsignacionCliente" class="btn btn-outline-dark fs-4 text-light rounded-pill border border-light">Asignarme actividades <i
                    class="bi bi-flag"></i></a>
            <a href="verHistorialMedicionCliente" class="btn btn-outline-dark fs-4 text-light rounded-pill border border-light">Historial de Medicion <i
                    class="bi bi-clipboard-check"></i></a>
            <a href="verEstadoMembresiaCliente" class="btn btn-outline-dark fs-4 text-light rounded-pill border border-light">Estado membresia <i
                    class="bi bi-file-person"></i></a>
            <button type="button" class="btn btn-outline-dark fs-4 text-light rounded-pill border border-light" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Realizar un Pago <i class="bi bi-credit-card"></i>
            </button>

        </div>

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
                    <form action="agregarPago" method="post">

                        <label for="txt_pago_id" class="form-label">ID:</label>
                        <input type="text" name="txt_pago_id" id="txt_pago_id" class="form-control">

                        <label for="txt_cliente_id" class="form-label">Cliente ID:</label>
                        <input type="text" name="txt_cliente_id" id="txt_cliente_id" class="form-control">

                        <label for="txt_membresia_id" class="form-label">Membresia ID:</label>
                        <input type="text" name="txt_membresia_id" id="txt_membresia_id" class="form-control">

                        <label for="txt_fecha_pago" class="form-label">Fecha de pago:</label>
                        <input type="date" name="txt_fecha_pago" id="txt_fecha_pago" class="form-control">

                        <label for="txt_monto" class="form-label">Monto:</label>
                        <input type="number" name="txt_monto" id="txt_monto" class="form-control">

                        <label for="txt_metodo_pago" class="form-label">Metodo de pago:</label>
                        <input type="text" name="txt_metodo_pago" id="txt_metodo_pago" class="form-control">

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













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>


</body>

</html>