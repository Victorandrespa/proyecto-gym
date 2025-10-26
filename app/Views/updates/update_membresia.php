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
    <title>Membresia</title>
</head>

<body class="background-image-update-membresias">
    <div class="container square xyz-in" xyz="small-100% origin-top">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="my-4 text-light text-center">UPDATE MEMBRESIA</h2>

                <form action="<?= base_url('editar_membresia') ?>" method="post">
                    <div class="row">
                        <!-- Columna izquierda -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="txt_membresia_id" class="form-label text-light">MEMBRESIA ID:</label>
                                <input type="text" name="txt_membresia_id" id="txt_membresia_id" class="form-control"
                                    value="<?= $datos['membresia_id'] ?>" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="txt_tipo_plan" class="form-label text-light">TIPO PLAN:</label>
                                <input type="text" name="txt_tipo_plan" id="txt_tipo_plan" class="form-control"
                                    value="<?= $datos['tipo_plan'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="txt_precio" class="form-label text-light">PRECIO:</label>
                                <input type="number" name="txt_precio" id="txt_precio" class="form-control"
                                    value="<?= $datos['precio'] ?>">
                            </div>
                        </div>

                        <!-- Columna derecha -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="txt_duracion_meses" class="form-label text-light">DURACIÓN (MESES):</label>
                                <input type="number" name="txt_duracion_meses" id="txt_duracion_meses" class="form-control"
                                    value="<?= $datos['duracion_meses'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="txt_beneficios" class="form-label text-light">BENEFICIOS:</label>
                                <input type="text" name="txt_beneficios" id="txt_beneficios" class="form-control"
                                    value="<?= $datos['beneficios'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="txt_sede" class="form-label text-light">SEDE:</label>
                                <input type="text" name="txt_sede" id="txt_sede" class="form-control"
                                    value="<?= $datos['sede'] ?>">
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