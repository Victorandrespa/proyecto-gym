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
    <title>Main</title>
</head>

<body class="container mt-4 background-image">


    <div class="container item-group" xyz="fade stagger">
        <div class="row align-items-center">
            <!-- Primera columna: Logo -->
            <div class="col-auto square xyz-in">
                <img src="<?= base_url('images/evolvere-logo-250.png') ?>" alt="Logo" class="img-fluid">
            </div>

            <!-- Segunda columna: 3 elementos alineados -->
            <div class="col">
                <div class="d-flex flex-column">
                    <h1 class="mt-5 square xyz-in">EVOLVERE</h1>
                    <h4 class="mb-4 square xyz-in">HEALTH & FITNESS</h4>

                    <div class="d-flex flex-row justify-content-between align-items-center square xyz-in">
                        <a href=" " class="btn btn btn-outline-dark rounded-pill">Contacto <i class="bi bi-telephone"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-around align-items-center mt-3">

        <div class="d-grid gap-2 mt-5" style="width: 50%;">


            <a href="<?= base_url('login/admin') ?>"
                class="btn btn-outline-dark fs-4 rounded-pill square xyz-in border border-5 mb-4" xyz="big iterate-infinite duration-10 direction-alternate-reverse">
                Administrador - Gerente <i class="bi bi-key"></i>
            </a>

            <a href="<?= base_url('login/personal') ?>"
                class="btn btn-outline-dark fs-4 rounded-pill square xyz-in border border-5 mb-4" xyz="big iterate-infinite duration-10 direction-alternate-reverse">
                Administrador - Personal <i class="bi bi-building"></i>
            </a>

            <a href="<?= base_url('login/cliente') ?>"
                class="btn btn-outline-dark fs-4 rounded-pill square xyz-in border border-5" xyz="big iterate-infinite duration-10 direction-alternate-reverse">
                Cliente App <i class="bi bi-person-badge"></i>
            </a>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>


</body>

</html>