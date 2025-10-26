<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/background-personal.css'); ?>">
    <title>Historial Medicion</title>
</head>

<button onclick="window.history.back()" class="btn btn btn-outline-dark text-light border border-light ms-5">Home <i class="bi bi-house"></i></button>

<body class="background-image-personal-update-historial-medicion">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="my-4 text-light">UPDATE HISTORIAL DE MEDICION</h2>
                <form action="<?= base_url('editar_medicion') ?>" method="post">

                    <label for="txt_medicion_id" class="form-label text-light">MEDICION ID:</label>
                    <input type="text" name="txt_medicion_id" id="txt_medicion_id" class="form-control"
                        value="<?= $datos['medicion_id'] ?>" readonly>

                    <label for="txt_plan_id" class="form-label text-light">PLAN ID:</label>
                    <input type="text" name="txt_plan_id" id="txt_plan_id" class="form-control"
                        value="<?= $datos['plan_id'] ?>">

                    <label for="txt_cliente_id" class="form-label text-light">CLIENTE ID:</label>
                    <input type="text" name="txt_cliente_id" id="txt_cliente_id" class="form-control"
                        value="<?= $datos['cliente_id'] ?>">

                    <label for="txt_fecha_medicion" class="form-label text-light">FECHA MEDICION:</label>
                    <input type="date" name="txt_fecha_medicion" id="txt_fecha_medicion" class="form-control"
                        value="<?= $datos['fecha_medicion'] ?>">

                    <label for="txt_peso" class="form-label text-light">PESO:</label>
                    <input type="number" name="txt_peso" id="txt_peso" class="form-control"
                        value="<?= $datos['peso'] ?>">

                    <label for="txt_altura" class="form-label text-light">ALTURA:</label>
                    <input type="number" name="txt_altura" id="txt_altura" class="form-control"
                        value="<?= $datos['altura'] ?>">

                    <label for="txt_indice_masaCorporal" class="form-label text-light">INDICE MASA CORPORAL:</label>
                    <input type="number" name="txt_indice_masaCorporal" id="txt_indice_masaCorporal" class="form-control"
                        value="<?= $datos['indice_masaCorporal'] ?>">

                    <label for="txt_promedio_calorias" class="form-label text-light">PROMEDIO CALORIAS:</label>
                    <input type="number" name="txt_promedio_calorias" id="txt_promedio_calorias" class="form-control"
                        value="<?= $datos['promedio_calorias'] ?>">

                    <label for="txt_observaciones" class="form-label text-light">OBSERVACIONES:</label>
                    <input type="text" name="txt_observaciones" id="txt_observaciones" class="form-control"
                        value="<?= $datos['observaciones'] ?>">

                   
                    <button type="submit" class="btn btn-outline-dark mt-3 w-100 text-light rounded-pill border border-light mb-5">Guardar</button>

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