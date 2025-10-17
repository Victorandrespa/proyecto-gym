<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Actividad</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="my-4">Update Actividad</h2>
                <form action="<?= base_url('editar_actividad') ?>" method="post">

                    <label for="txt_actividad_id" class="form-label">Actividad ID:</label>
                    <input type="text" name="txt_actividad_id" id="txt_actividad_id" class="form-control"
                        value="<?= $datos['actividad_id'] ?>" readonly>

                    <label for="txt_personal_id" class="form-label">Personal ID:</label>
                    <input type="text" name="txt_personal_id" id="txt_personal_id" class="form-control"
                        value="<?= $datos['personal_id'] ?>">

                    <label for="txt_nombre" class="form-label">Nombre:</label>
                    <input type="text" name="txt_nombre" id="txt_nombre" class="form-control"
                        value="<?= $datos['nombre'] ?>">

                    <label for="txt_modalidad" class="form-label">Modalidad:</label>
                    <input type="text" name="txt_modalidad" id="txt_modalidad" class="form-control"
                        value="<?= $datos['modalidad'] ?>">

                    <label for="txt_nivel" class="form-label">Nivel:</label>
                    <input type="text" name="txt_nivel" id="txt_nivel" class="form-control"
                        value="<?= $datos['nivel'] ?>">

                    <label for="txt_cupo" class="form-label">Cupo Maximo:</label>
                    <input type="number" name="txt_cupo" id="txt_cupo" class="form-control"
                        value="<?= $datos['cupo_maximo'] ?>">



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