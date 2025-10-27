<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/background-personal.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">
    <title>Historial Medicion</title>
</head>

<body class="background-image-personal-update-historial-medicion">

    <div class="container mt-4">
        <button onclick="window.history.back()" class="btn btn btn-outline-dark text-light border border-light mb-3">
            <i class="bi bi-house"></i> Home
        </button>

        <div class="container square xyz-in" xyz="small-100% origin-top">
            <div class="row">
                <div class="col-8 offset-2">
                    <h2 class="my-4 text-light text-center">UPDATE HISTORIAL DE MEDICIÓN</h2>

                    <form id="formEditarMedicion" action="<?= base_url('editar_medicion') ?>" method="post">
                        <div class="row">
                            <!-- Columna izquierda -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="txt_medicion_id" class="form-label text-light">MEDICIÓN ID:</label>
                                    <input type="text" name="txt_medicion_id" id="txt_medicion_id" class="form-control"
                                        value="<?= $datos['medicion_id'] ?>" readonly>
                                </div>

                                <div class="mb-3">
                                    <label for="txt_plan_id" class="form-label text-light">PLAN ID:</label>
                                    <input type="text" name="txt_plan_id" id="txt_plan_id" class="form-control"
                                        value="<?= $datos['plan_id'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="txt_cliente_id" class="form-label text-light">CLIENTE ID:</label>
                                    <input type="text" name="txt_cliente_id" id="txt_cliente_id" class="form-control"
                                        value="<?= $datos['cliente_id'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="txt_fecha_medicion" class="form-label text-light">FECHA DE MEDICIÓN:</label>
                                    <input type="date" name="txt_fecha_medicion" id="txt_fecha_medicion" class="form-control"
                                        value="<?= $datos['fecha_medicion'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="txt_peso" class="form-label text-light">PESO:</label>
                                    <input type="number" step="0.01" name="txt_peso" id="txt_peso" class="form-control"
                                        value="<?= $datos['peso'] ?>">
                                </div>
                            </div>

                            <!-- Columna derecha -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="txt_altura" class="form-label text-light">ALTURA (m):</label>
                                    <input type="number" step="0.01" name="txt_altura" id="txt_altura" class="form-control"
                                        value="<?= $datos['altura'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="txt_indice_masaCorporal" class="form-label text-light">ÍNDICE DE MASA CORPORAL:</label>
                                    <input type="number" step="0.01" name="txt_indice_masaCorporal" id="txt_indice_masaCorporal" class="form-control"
                                        value="<?= $datos['indice_masaCorporal'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="txt_promedio_calorias" class="form-label text-light">PROMEDIO DE CALORÍAS:</label>
                                    <input type="number" step="1" name="txt_promedio_calorias" id="txt_promedio_calorias" class="form-control"
                                        value="<?= $datos['promedio_calorias'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="txt_observaciones" class="form-label text-light">OBSERVACIONES:</label>
                                    <input type="text" name="txt_observaciones" id="txt_observaciones" class="form-control"
                                        value="<?= $datos['observaciones'] ?>">
                                </div>
                            </div>
                        </div>

                        <!-- Botón Guardar -->
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-outline-light border border-light w-100 rounded-pill">
                                <i class="bi bi-save"></i> Guardar cambios
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Confirmación antes de guardar
        document.getElementById("formEditarMedicion").addEventListener("submit", function (e) {
            e.preventDefault();
            Swal.fire({
                title: "¿Guardar cambios?",
                text: "Se actualizará el historial de medición.",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#198754",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, guardar",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    e.target.submit();
                }
            });
        });
    </script>

    <?= view('partials/alerts_footer') ?>
    <script src="<?= base_url('js/app.js'); ?>"></script>

</body>
</html>
