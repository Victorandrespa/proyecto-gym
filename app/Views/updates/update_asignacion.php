<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/background-clientes.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">
    <title>Asignacion</title>
</head>

<div class="container pt-4 pb-4">
    <div class="row justify-content-center">
        <div class="col-4 background-image-clientes-update-asignacion rounded-5 w-50 p-3">

            <body>
                <div class="container">
                    <div class="row">
                        <div class="col-8 offset-2">
                            <h2 class="my-4 text-light square xyz-in" xyz="small-100% origin-top">UPDATE ASIGNACION</h2>
                            <form action="<?= base_url('editar_asignacion') ?>" method="post" class="item-group">

                                <label for="txt_asignacion_id" class="form-label text-light square xyz-in" xyz="inherit left">ASIGNACION ID:</label>
                                <input type="text" name="txt_asignacion_id" id="txt_asignacion_id" xyz="inherit left" class="form-control square xyz-in"
                                    value="<?= $datos['asignacion_id'] ?>" readonly>

                                <label for="txt_cliente_id" class="form-label text-light square xyz-in" xyz="inherit up">CLIENTE:</label>
                                <input type="text" name="txt_cliente_id" id="txt_cliente_id" class="form-control square xyz-in"
                                    value="<?= $datos['cliente_id'] ?>" xyz="inherit up">

                                <label for="txt_actividad_id" class="form-label text-light square xyz-in" xyz="inherit down">ACTIVIDAD ID:</label>
                                <input type="text" name="txt_actividad_id" id="txt_actividad_id" class="form-control square xyz-in"
                                    value="<?= $datos['actividad_id'] ?>" xyz="inherit down">

                                <label for="txt_fecha" class="form-label text-light square xyz-in" xyz="inherit left">FECHA:</label>
                                <input type="date" name="txt_fecha" id="txt_fecha" class="form-control square xyz-in"
                                    value="<?= $datos['fecha'] ?>" xyz="inherit left">

                                <label for="txt_hora" class="form-label text-light square xyz-in" xyz="inherit up">HORA:</label>
                                <input type="number" name="txt_hora" id="txt_hora" class="form-control square xyz-in"
                                    value="<?= $datos['hora'] ?>" xyz="inherit up">

                                <label for="txt_estado" class="form-label text-light square xyz-in" xyz="inherit down">ESTADO:</label>
                                <input type="text" name="txt_estado" id="txt_estado" class="form-control square xyz-in"
                                    value="<?= $datos['estado'] ?>" xyz="inherit down">

                                <label for="txt_fecha_reservacion" class="form-label text-light square xyz-in" xyz="inherit left">FECHA RESERVACION:</label>
                                <input type="date" name="txt_fecha_reservacion" id="txt_fecha_reservacion" class="form-control square xyz-in"
                                    value="<?= $datos['fecha_reservacion'] ?>" xyz="inherit left">


                                <button type="submit" class="btn btn-outline-dark mt-3 w-100 text-light rounded-pill border border-light mb-5 square xyz-in" xyz="inherit up">Guardar</button>

                            </form>
                        </div>
                    </div>
                </div>





                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
                    crossorigin="anonymous">
                </script>
            </body>

        </div>
    </div>
</div>

</html>