<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Membresia</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="my-4">Update Membresia</h2>
                <form action="<?= base_url('editar_grado') ?>" method="post">

                    <label for="txt_membresia_id" class="form-label">Membresia ID:</label>
                    <input type="text" name="txt_membresia_id" id="txt_membresia_id" class="form-control"
                        value="<?= $datos['pago_id'] ?>" readonly>

                    <label for="txt_tipo_plan" class="form-label">Tipo Plan:</label>
                    <input type="text" name="txt_tipo_plan" id="txt_tipo_plan" class="form-control"
                        value="<?= $datos['cliente_id'] ?>">

                    <label for="txt_precio" class="form-label">Precio:</label>
                    <input type="text" name="txt_precio" id="txt_precio" class="form-control"
                        value="<?= $datos['membresia_id'] ?>">

                    <label for="txt_duracion_meses" class="form-label">Duracion (meses):</label>
                    <input type="text" name="txt_duracion_meses" id="txt_duracion_meses" class="form-control"
                        value="<?= $datos['fecha_pago'] ?>">

                    <label for="txt_beneficios" class="form-label">Beneficios:</label>
                    <input type="text" name="txt_beneficios" id="txt_beneficios" class="form-control"
                        value="<?= $datos['monto'] ?>">

                    <label for="txt_sede" class="form-label">Sede:</label>
                    <input type="text" name="txt_sede" id="txt_sede" class="form-control"
                        value="<?= $datos['concepto'] ?>">


                    <button type="submit" class="btn btn-outline-dark mt-3 w-100">Guardar</button>

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