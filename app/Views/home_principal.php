<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/background.css'); ?>">
    <title>Main</title>
</head>

<body class="container mt-4 background-image">


    <div class="container">
        <div class="row align-items-center">
            <!-- Primera columna: Logo -->
            <div class="col-auto">
                <img src="<?= base_url('images/logo-white-black250.png') ?>" alt="Logo" class="img-fluid">
            </div>

            <!-- Segunda columna: 3 elementos alineados -->
            <div class="col">
                <div class="d-flex flex-column">
                    <h1 class="mt-5">MI GIMNASIO</h1>
                    <h4 class="mb-4">PROYECTO FULL STACK</h4>

                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <a href=" " class="btn btn btn-outline-dark rounded-pill">Contacto <i class="bi bi-telephone"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-around align-items-center mt-3">

        <div class="d-grid gap-2 mt-5" style="width: 50%;">
            <a href="verAdminHome" class="btn btn-outline-dark fs-4 rounded-pill">Administrador - Gerente <i class="bi bi-key"></i></a>
            <a href="verPersonalHome" class="btn btn-outline-dark fs-4 rounded-pill">Administrador - Personal <i class="bi bi-building"></i></a>
            <a href="verClienteHome" class="btn btn-outline-dark fs-4 rounded-pill">Cliente App <i class="bi bi-person-badge"></i></a>

        </div>

    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>


</body>

</html>