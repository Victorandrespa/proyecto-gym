<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Personal</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="my-4">Update Personal</h2>
                <form action="<?= base_url('editar_personal') ?>" method="post">

                    <label for="txt_puesto_id" class="form-label">Puesto ID:</label>
                    <input type="text" name="txt_puesto_id" id="txt_puesto_id" class="form-control"
                        value="<?= $datos['puesto_id'] ?>" readonly>

                    <label for="txt_nombre" class="form-label">Nombre:</label>
                    <input type="text" name="txt_nombre" id="txt_nombre" class="form-control"
                        value="<?= $datos['nombre'] ?>">

                    <label for="txt_apellido" class="form-label">Apellido:</label>
                    <input type="text" name="txt_apellido" id="txt_apellido" class="form-control"
                        value="<?= $datos['apellido'] ?>">

                    <label for="txt_telefono" class="form-label">Telefono:</label>
                    <input type="text" name="txt_telefono" id="txt_telefono" class="form-control"
                        value="<?= $datos['telefono'] ?>">

                    <label for="txt_email" class="form-label">Email:</label>
                    <input type="text" name="txt_email" id="txt_email" class="form-control"
                        value="<?= $datos['email'] ?>">

                    <label for="txt_fecha_contratacion" class="form-label">Fecha Contratacion:</label>
                    <input type="text" name="txt_fecha_contratacion" id="txt_fecha_contratacion" class="form-control"
                        value="<?= $datos['fecha_contratacion'] ?>">

                    <label for="txt_estado" class="form-label">Estado:</label>
                    <input type="text" name="txt_estado" id="txt_estado" class="form-control"
                        value="<?= $datos['estado'] ?>">

                    <label for="txt_horario" class="form-label">Horario:</label>
                    <input type="text" name="txt_horario" id="txt_horario" class="form-control"
                        value="<?= $datos['horario'] ?>">

                     <label for="txt_sede" class="form-label">Sede principal:</label>
                    <input type="text" name="txt_sede" id="txt_sede" class="form-control"
                        value="<?= $datos['sede'] ?>">

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