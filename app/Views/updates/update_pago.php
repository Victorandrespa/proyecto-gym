<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/background.css'); ?>">
    <title>Pago</title>
</head>

<button onclick="window.history.back()" class="btn btn btn-outline-dark text-light border border-light ms-5">Home <i class="bi bi-house"></i></button>


<body class="background-image-update-pago">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="my-4 text-light">UPDATE PAGO</h2>
                <form action="<?= base_url('editar_pago') ?>" method="post">

                    <label for="txt_pago_id" class="form-label text-light">PAGO ID:</label>
                    <input type="text" name="txt_pago_id" id="txt_pago_id" class="form-control"
                        value="<?= $datos['pago_id'] ?>" readonly>

                    <label for="txt_cliente_id" class="form-label text-light">CLIENTE ID:</label>
                    <input type="text" name="txt_cliente_id" id="txt_cliente_id" class="form-control"
                        value="<?= $datos['cliente_id'] ?>">

                    <label for="txt_membresia_id" class="form-label text-light">MEMBRESIA ID:</label>
                    <input type="text" name="txt_membresia_id" id="txt_membresia_id" class="form-control"
                        value="<?= $datos['membresia_id'] ?>">

                    <label for="txt_fecha_pago" class="form-label text-light">FECHA DE PAGO:</label>
                    <input type="date" name="txt_fecha_pago" id="txt_fecha_pago" class="form-control"
                        value="<?= $datos['fecha_pago'] ?>">

                    <label for="txt_monto" class="form-label text-light">MONTO:</label>
                    <input type="number" name="txt_monto" id="txt_monto" class="form-control"
                        value="<?= $datos['monto'] ?>">

                    <label for="txt_metodo_pago" class="form-label text-light">METODO DE PAGO:</label>
                    <input type="text" name="txt_metodo_pago" id="txt_metodo_pago" class="form-control"
                        value="<?= $datos['metodo_pago'] ?>">

                    <label for="txt_concepto" class="form-label text-light">CONCEPTO:</label>
                    <input type="text" name="txt_concepto" id="txt_concepto" class="form-control"
                        value="<?= $datos['concepto'] ?>">


                    <button type="submit" class="btn btn-dark mt-3 w-100">GUARDAR</button>

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