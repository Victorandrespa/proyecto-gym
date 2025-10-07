<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Plan Nutricion</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="my-4">Update Plan Nutricion</h2>
                <form action="<?= base_url('editar_plan_nutricion') ?>" method="post">

                    <label for="txt_plan_id" class="form-label">Plan ID:</label>
                    <input type="text" name="txt_plan_id" id="txt_plan_id" class="form-control"
                        value="<?= $datos['plan_id'] ?>" readonly>

                    <label for="txt_cliente_id" class="form-label">Cliente ID:</label>
                    <input type="text" name="txt_cliente_id" id="txt_cliente_id" class="form-control"
                        value="<?= $datos['cliente_id'] ?>">

                    <label for="txt_personal_id" class="form-label">Personal ID:</label>
                    <input type="text" name="txt_personal_id" id="txt_personal_id" class="form-control"
                        value="<?= $datos['personal_id'] ?>">

                    <label for="txt_objetivo" class="form-label">Objetivo:</label>
                    <input type="text" name="txt_objetivo" id="txt_objetivo" class="form-control"
                        value="<?= $datos['objetivo'] ?>">

                    <label for="txt_duracion" class="form-label">Duracion:</label>
                    <input type="text" name="txt_duracion" id="txt_duracion" class="form-control"
                        value="<?= $datos['duracion'] ?>">

                    <label for="txt_descripcion" class="form-label">Descripcion:</label>
                    <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control"
                        value="<?= $datos['descripcion'] ?>">

                    

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