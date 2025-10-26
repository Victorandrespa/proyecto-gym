<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/background.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">
    <title>Gerencia</title>
</head>

<body class="container mt-4 background-image-admin-gerente">


    <div class="container item-group" xyz="fade stagger">
        <div class="row align-items-center">
            <!-- Primera columna: Logo -->
            <div class="col-auto square xyz-in">
                <img src="<?= base_url('images/evolvere-logo-250.png') ?>" alt="Logo" class="img-fluid">
            </div>

            <!-- Segunda columna: 3 elementos alineados -->
            <div class="col">
                <div class="d-flex flex-column">
                    <h1 class="mt-5 text-light square xyz-in">ADMINISTRADOR</h1>
                    <h4 class="mb-4 text-light square xyz-in">GERENCIA</h4>

                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <a href="verHome" class="btn btn btn-outline-dark text-light border border-light square xyz-in">Menu Principal <i class="bi bi-house"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-around mt-3">

        <div class="d-grid gap-2 mt-5 item-group" style="width: 50%;">
            <a href="verPersonalAdmin" class="btn btn-outline-dark fs-4 text-light rounded-pill border border-light square xyz-in border border-5" xyz="duration-20 ease-in-out-back flip-up-100% iterate-infinite">Gestion de Personal <i class="bi bi-person"></i></a>
            <a href="verMembresiaAdmin" class="btn btn-outline-dark fs-4 text-light rounded-pill border border-light square xyz-in border border-5" xyz="duration-20 ease-in-out-back flip-up-100% iterate-infinite">Gestion de Membresias <i class="bi bi-file-bar-graph"></i></a>
            <a href="verPagoAdmin" class="btn btn-outline-dark fs-4 text-light rounded-pill border border-light square xyz-in border border-5" xyz="duration-20 ease-in-out-back flip-up-100% iterate-infinite">Administrador de Pagos <i class="bi bi-credit-card"></i></a>
            <a href="verEstadoMembresiaAdmin" class="btn btn-outline-dark fs-4 text-light rounded-pill border border-light square xyz-in border border-5" xyz="duration-20 ease-in-out-back flip-up-100% iterate-infinite">Estado de Membresias <i class="bi bi-bar-chart"></i></a>
            <a href="verClienteAdmin" class="btn btn-outline-dark fs-4 text-light rounded-pill border border-light square xyz-in border border-5" xyz="duration-20 ease-in-out-back flip-up-100% iterate-infinite">Base de datos Clientes <i class="bi bi-database"></i></a>

        </div>

    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>


</body>

</html>