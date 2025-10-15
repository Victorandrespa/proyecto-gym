<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Asignacion</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="my-4">Update Asignacion</h2>
                <form action="<?= base_url('editar_asignacion') ?>" method="post">

                    <label for="txt_asignacion_id" class="form-label">Asignacion ID:</label>
                    <input type="text" name="txt_asignacion_id" id="txt_asignacion_id" class="form-control"
                        value="<?= $datos['asignacion_id'] ?>" readonly>

                    <label for="txt_cliente" class="form-label">Cliente:</label>
                    <input type="text" name="txt_cliente" id="txt_cliente" class="form-control"
                        value="<?= $datos['cliente_id'] ?>">

                    <label for="txt_actividad_id" class="form-label">Actividad ID:</label>
                    <input type="text" name="txt_actividad_id" id="txt_actividad_id" class="form-control"
                        value="<?= $datos['actividad_id'] ?>">

                    <label for="txt_fecha" class="form-label">Fecha:</label>
                    <input type="date" name="txt_fecha" id="txt_fecha" class="form-control"
                        value="<?= $datos['fecha'] ?>">

                    <label for="txt_hora" class="form-label">Hora:</label>
                    <input type="number" name="txt_hora" id="txt_hora" class="form-control"
                        value="<?= $datos['hora'] ?>">

                    <label for="txt_estado" class="form-label">Estado:</label>
                    <input type="text" name="txt_estado" id="txt_estado" class="form-control"
                        value="<?= $datos['estado'] ?>">

                    <label for="txt_fecha_reservacion" class="form-label">Fecha Reservacion:</label>
                    <input type="date" name="txt_fecha_reservacion" id="txt_fecha_reservacion" class="form-control"
                        value="<?= $datos['fecha_reservacion'] ?>">


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