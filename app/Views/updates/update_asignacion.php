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
    <title>Actualizar Asignación</title>
</head>

<body class="background-image-clientes-update-asignacion">

    <div class="container mt-4">
        <button onclick="window.history.back()" class="btn btn btn-outline-dark text-light border border-light mb-3">
            <i class="bi bi-house"></i> Home
        </button>

        <div class="container square xyz-in" xyz="small-100% origin-top">
            <div class="row">
                <div class="col-8 offset-2">
                    <h2 class="my-4 text-light text-center">UPDATE ASIGNACIÓN</h2>

                    <form id="formEditarAsignacion" action="<?= base_url('editar_asignacion') ?>" method="post">
                        
                        <div class="mb-3">
                            <label for="txt_asignacion_id" class="form-label text-light">ASIGNACIÓN ID:</label>
                            <input type="text" name="txt_asignacion_id" id="txt_asignacion_id" class="form-control"
                                value="<?= $datos['asignacion_id'] ?>" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="txt_actividad_id" class="form-label text-light">ACTIVIDAD ID:</label>
                            <input type="text" name="txt_actividad_id" id="txt_actividad_id" class="form-control"
                                value="<?= $datos['actividad_id'] ?>">
                        </div>

                        <div class="mb-3">
                            <label for="txt_estado" class="form-label text-light">ESTADO:</label>
                            <input type="text" name="txt_estado" id="txt_estado" class="form-control"
                                value="<?= $datos['estado'] ?>">
                        </div>

                        <div class="mb-3">
                            <label for="txt_fecha_reservacion" class="form-label text-light">FECHA RESERVACIÓN:</label>
                            <input type="date" name="txt_fecha_reservacion" id="txt_fecha_reservacion"
                                class="form-control" value="<?= $datos['fecha_reservacion'] ?>">
                        </div>

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
        // Confirmación al guardar cambios
        document.getElementById("formEditarAsignacion").addEventListener("submit", function (e) {
            e.preventDefault();
            Swal.fire({
                title: "¿Guardar cambios?",
                text: "Se actualizará la información de la asignación.",
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
