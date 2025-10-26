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
    <title>Puesto</title>
</head>

<body class="background-image-update-cliente">
    <div class="container square xyz-in" xyz="small-100% origin-top">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="my-4 text-center text-light">Update Puesto</h2>

                <form action="<?= base_url('editar_puesto') ?>" method="post">
                    <div class="row">
                        <!-- Columna izquierda -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="txt_puesto_id" class="form-label text-light">Puesto ID:</label>
                                <input type="text" name="txt_puesto_id" id="txt_puesto_id" class="form-control"
                                    value="<?= $datos['puesto_id'] ?>" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="txt_rol" class="form-label text-light">Rol:</label>
                                <input type="text" name="txt_rol" id="txt_rol" class="form-control"
                                    value="<?= $datos['rol'] ?>">
                            </div>
                        </div>

                        <!-- Columna derecha -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="txt_departamento" class="form-label text-light">Departamento:</label>
                                <input type="text" name="txt_departamento" id="txt_departamento" class="form-control"
                                    value="<?= $datos['departamento'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="txt_descripcion" class="form-label text-light">Descripcion:</label>
                                <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control"
                                    value="<?= $datos['descripcion'] ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Botón -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-light mt-3 mb-4 w-100 rounded-pill border border-light">
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