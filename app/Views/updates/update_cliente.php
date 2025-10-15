<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Cliente</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="my-4">Update Cliente</h2>
                <form action="<?= base_url('editar_cliente') ?>" method="post">

                    <label for="txt_cliente_id" class="form-label">Cliente ID:</label>
                    <input type="text" name="txt_cliente_id" id="txt_cliente_id" class="form-control"
                        value="<?= $datos['cliente_id'] ?>" readonly>

                    <label for="txt_nombre" class="form-label">Nombre:</label>
                    <input type="text" name="txt_nombre" id="txt_nombre" class="form-control"
                        value="<?= $datos['nombre'] ?>">

                    <label for="txt_apellido" class="form-label">Apellido:</label>
                    <input type="text" name="txt_apellido" id="txt_apellido" class="form-control"
                        value="<?= $datos['apellido'] ?>">

                    <label for="txt_edad" class="form-label">Edad:</label>
                    <input type="text" name="txt_edad" id="txt_edad" class="form-control"
                        value="<?= $datos['edad'] ?>">

                    <label for="txt_telefono" class="form-label">Telefono:</label>
                    <input type="text" name="txt_telefono" id="txt_telefono" class="form-control"
                        value="<?= $datos['telefono'] ?>">

                    <label for="txt_email" class="form-label">Email:</label>
                    <input type="text" name="txt_email" id="txt_email" class="form-control"
                        value="<?= $datos['email'] ?>">

                    <label for="txt_contacto_emergencia" class="form-label">Contacto Emergencia:</label>
                    <input type="text" name="txt_contacto_emergencia" id="txt_contacto_emergencia" class="form-control"
                        value="<?= $datos['contacto_emergencia'] ?>">

                    <label for="txt_telefono_emergencia" class="form-label">Telefono Emergencia:</label>
                    <input type="text" name="txt_telefono_emergencia" id="txt_telefono_emergencia" class="form-control"
                        value="<?= $datos['telefono_emergencia'] ?>">

                    <label for="txt_fecha_registro" class="form-label">Fecha de Registro:</label>
                    <input type="text" name="txt_fecha_registro" id="txt_fecha_registro" class="form-control"
                        value="<?= $datos['fecha_registro'] ?>">


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