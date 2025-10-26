<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/background-personal.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">
    <title>Plan Nutricion</title>
</head>

<button onclick="window.history.back()" class="btn btn btn-outline-dark text-light border border-light ms-5">Home <i class="bi bi-house"></i></button>

<body class="background-image-personal-update-plan-nutricional">
    <div class="container square xyz-in" xyz="small-100% origin-top">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="my-4 text-light text-center">UPDATE PLAN NUTRICIONAL</h2>

                <form action="<?= base_url('editar_plan_nutricion') ?>" method="post">
                    <div class="row">
                        <!-- Columna izquierda -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="txt_plan_id" class="form-label text-light">PLAN ID:</label>
                                <input type="text" name="txt_plan_id" id="txt_plan_id" class="form-control"
                                    value="<?= $datos['plan_id'] ?>" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="txt_personal_id" class="form-label text-light">PERSONAL ID:</label>
                                <input type="text" name="txt_personal_id" id="txt_personal_id" class="form-control"
                                    value="<?= $datos['personal_id'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="txt_objetivo" class="form-label text-light">OBJETIVO:</label>
                                <input type="text" name="txt_objetivo" id="txt_objetivo" class="form-control"
                                    value="<?= $datos['objetivo'] ?>">
                            </div>
                        </div>

                        <!-- Columna derecha -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="txt_duracion" class="form-label text-light">DURACIÓN (DÍAS):</label>
                                <input type="number" name="txt_duracion" id="txt_duracion" class="form-control"
                                    value="<?= $datos['duracion'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="txt_descripcion" class="form-label text-light">DESCRIPCIÓN:</label>
                                <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control"
                                    value="<?= $datos['descripcion'] ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Botón Guardar -->
                    <div class="text-center">
                        <button type="submit"
                            class="btn btn-outline-dark mt-3 w-100 text-light rounded-pill border border-light mb-5">
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