<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Estado Membresia</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="my-4">Update Estado Membresia</h2>
                <form action="<?= base_url('editar_estado_membresia') ?>" method="post">

                    <label for="txt_estado_membresia_id" class="form-label">Estado Membresia ID:</label>
                    <input type="text" name="txt_estado_membresia_id" id="txt_estado_membresia_id" class="form-control"
                        value="<?= $datos['estado_membresia_id'] ?>" readonly>

                    <label for="txt_membresia_id" class="form-label">Membresia ID:</label>
                    <input type="text" name="txt_membresia_id" id="txt_membresia_id" class="form-control"
                        value="<?= $datos['membresia_id'] ?>">

                    <label for="txt_cliente_id" class="form-label">Cliente ID:</label>
                    <input type="text" name="txt_cliente_id" id="txt_cliente_id" class="form-control"
                        value="<?= $datos['cliente_id'] ?>">

                    <label for="txt_fecha_inicio" class="form-label">Fecha Inicio:</label>
                    <input type="date" name="txt_fecha_inicio" id="txt_fecha_inicio" class="form-control"
                        value="<?= $datos['fecha_inicio'] ?>">

                    <label for="txt_fecha_fin" class="form-label">Fecha Fin:</label>
                    <input type="date" name="txt_fecha_fin" id="txt_fecha_fin" class="form-control"
                        value="<?= $datos['fecha_fin'] ?>">

                    <label for="txt_estado" class="form-label">Estado:</label>
                    <input type="text" name="txt_estado" id="txt_estado" class="form-control"
                        value="<?= $datos['estado'] ?>">


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