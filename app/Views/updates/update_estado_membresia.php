<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/background.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">
    <title>Estado Membresia</title>
</head>

<div class="p-4">
    <button onclick="window.history.back()" class="btn btn btn-outline-dark text-light border border-light ms-5">Home <i class="bi bi-house"></i></button>
</div>

<body class="background-image-update-estado-membresia">
    <div class="container square xyz-in" xyz="small-100% origin-top">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="my-4 text-light text-center">UPDATE ESTADO MEMBRESIA</h2>

                <form action="<?= base_url('editar_estado_membresia') ?>" method="post">
                    <div class="row">
                        <!-- Columna izquierda -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="txt_estado_membresia_id" class="form-label text-light">ESTADO MEMBRESIA ID:</label>
                                <input type="text" name="txt_estado_membresia_id" id="txt_estado_membresia_id" class="form-control"
                                    value="<?= $datos['estado_membresia_id'] ?>" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="txt_membresia_id" class="form-label text-light">MEMBRESIA ID:</label>
                                <input type="text" name="txt_membresia_id" id="txt_membresia_id" class="form-control"
                                    value="<?= $datos['membresia_id'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="txt_cliente_id" class="form-label text-light">CLIENTE ID:</label>
                                <input type="text" name="txt_cliente_id" id="txt_cliente_id" class="form-control"
                                    value="<?= $datos['cliente_id'] ?>">
                            </div>
                        </div>

                        <!-- Columna derecha -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="txt_fecha_inicio" class="form-label text-light">FECHA INICIO:</label>
                                <input type="date" name="txt_fecha_inicio" id="txt_fecha_inicio" class="form-control"
                                    value="<?= $datos['fecha_inicio'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="txt_fecha_fin" class="form-label text-light">FECHA FIN:</label>
                                <input type="date" name="txt_fecha_fin" id="txt_fecha_fin" class="form-control"
                                    value="<?= $datos['fecha_fin'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="txt_estado" class="form-label text-light">ESTADO:</label>
                                <input type="text" name="txt_estado" id="txt_estado" class="form-control"
                                    value="<?= $datos['estado'] ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Botón -->
                    <div class="text-center">
                        <button type="submit"
                            class="btn btn-outline-dark mt-3 w-100 text-light rounded-pill border border-light">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>
</body>

</html>