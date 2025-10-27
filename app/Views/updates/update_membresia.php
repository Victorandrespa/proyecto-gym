<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/background.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">
    <title>Actualizar Membresía</title>
</head>

<body class="background-image-update-membresias">

    <div class="container mt-4">
        <button onclick="window.history.back()" class="btn btn btn-outline-dark text-light border border-light mb-3">
            <i class="bi bi-house"></i> Home
        </button>

        <div class="container square xyz-in" xyz="small-100% origin-top">
            <div class="row">
                <div class="col-8 offset-2">
                    <h2 class="my-4 text-light text-center">UPDATE MEMBRESÍA</h2>

                    <form id="formEditarMembresia" action="<?= base_url('editar_membresia') ?>" method="post">
                        <div class="row">
                            <!-- Columna izquierda -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="txt_membresia_id" class="form-label text-light">MEMBRESÍA ID:</label>
                                    <input type="text" name="txt_membresia_id" id="txt_membresia_id" class="form-control"
                                        value="<?= $datos['membresia_id'] ?>" readonly>
                                </div>

                                <div class="mb-3">
                                    <label for="txt_tipo_plan" class="form-label text-light">TIPO DE PLAN:</label>
                                    <input type="text" name="txt_tipo_plan" id="txt_tipo_plan" class="form-control"
                                        value="<?= $datos['tipo_plan'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="txt_precio" class="form-label text-light">PRECIO:</label>
                                    <input type="number" step="0.01" name="txt_precio" id="txt_precio" class="form-control"
                                        value="<?= $datos['precio'] ?>">
                                </div>
                            </div>

                            <!-- Columna derecha -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="txt_duracion_meses" class="form-label text-light">DURACIÓN (MESES):</label>
                                    <input type="number" name="txt_duracion_meses" id="txt_duracion_meses" class="form-control"
                                        value="<?= $datos['duracion_meses'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="txt_beneficios" class="form-label text-light">BENEFICIOS:</label>
                                    <input type="text" name="txt_beneficios" id="txt_beneficios" class="form-control"
                                        value="<?= $datos['beneficios'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="txt_sede" class="form-label text-light">SEDE:</label>
                                    <input type="text" name="txt_sede" id="txt_sede" class="form-control"
                                        value="<?= $datos['sede'] ?>">
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
        document.getElementById("formEditarMembresia").addEventListener("submit", function (e) {
            e.preventDefault();
            Swal.fire({
                title: "¿Guardar cambios?",
                text: "Se actualizará la información de la membresía.",
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
