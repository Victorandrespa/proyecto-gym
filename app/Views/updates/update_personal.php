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
    <title>Personal</title>
</head>

<div class="p-4">
    <button onclick="window.history.back()" class="btn btn btn-outline-dark text-light border border-light ms-5">Home <i class="bi bi-house"></i></button>
</div>

<body class="background-image-update-personal">
    <div class="container square xyz-in" xyz="small-100% origin-top">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="my-4 text-light text-center">UPDATE PERSONAL</h2>

                <form action="<?= base_url('editar_personal') ?>" method="post">
                    <div class="row">
                        <!-- Columna izquierda -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="txt_personal_id" class="form-label text-light">PERSONAL:</label>
                                <input type="text" name="txt_personal_id" id="txt_personal_id" class="form-control"
                                    value="<?= $datos['personal_id'] ?>" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="txt_puesto_id" class="form-label text-light">PUESTO ID:</label>
                                <input type="text" name="txt_puesto_id" id="txt_puesto_id" class="form-control"
                                    value="<?= $datos['puesto_id'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="txt_nombre" class="form-label text-light">NOMBRE:</label>
                                <input type="text" name="txt_nombre" id="txt_nombre" class="form-control"
                                    value="<?= $datos['nombre'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="txt_apellido" class="form-label text-light">APELLIDO:</label>
                                <input type="text" name="txt_apellido" id="txt_apellido" class="form-control"
                                    value="<?= $datos['apellido'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="txt_telefono" class="form-label text-light">TELEFONO:</label>
                                <input type="number" name="txt_telefono" id="txt_telefono" class="form-control"
                                    value="<?= $datos['telefono'] ?>">
                            </div>
                        </div>

                        <!-- Columna derecha -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="txt_email" class="form-label text-light">EMAIL:</label>
                                <input type="email" name="txt_email" id="txt_email" class="form-control"
                                    value="<?= $datos['email'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="txt_fecha_contratacion" class="form-label text-light">FECHA CONTRATACION:</label>
                                <input type="date" name="txt_fecha_contratacion" id="txt_fecha_contratacion" class="form-control"
                                    value="<?= $datos['fecha_contratacion'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="txt_estado" class="form-label text-light">ESTADO:</label>
                                <input type="text" name="txt_estado" id="txt_estado" class="form-control"
                                    value="<?= $datos['estado'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="txt_horario" class="form-label text-light">HORARIO:</label>
                                <input type="number" name="txt_horario" id="txt_horario" class="form-control"
                                    value="<?= $datos['horario'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="txt_sede" class="form-label text-light">SEDE PRINCIPAL:</label>
                                <input type="text" name="txt_sede" id="txt_sede" class="form-control"
                                    value="<?= $datos['sede_principal'] ?>">
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
</body>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
</body>
</body>

</html>