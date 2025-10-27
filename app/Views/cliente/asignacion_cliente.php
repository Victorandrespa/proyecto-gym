<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/background-clientes.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">
    <title>Asignacion</title>
</head>

<body class="container mt-4 background-image-clientes-asignacion">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 rounded-5 p-3 border border-dark border-5">

                <div class="container item-group" xyz="fade stagger">
                    <div class="row align-items-center square xyz-in" xyz="inherit up">
                        <!-- Logo -->
                        <div class="col-auto square xyz-in" xyz="inherit up">
                            <img src="<?= base_url('images/evolvere-logo-250.png') ?>" alt="Logo" class="img-fluid">
                        </div>

                        <!-- Títulos y Home -->
                        <div class="col">
                            <div class="d-flex flex-column">
                                <h1 class="mt-5 text-light square xyz-in" xyz="inherit up">ASIGNACIONES</h1>
                                <h4 class="mb-5 text-light square xyz-in" xyz="inherit up">CLIENTE</h4>

                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <a href="verClienteHome" class="btn btn-outline-dark text-light border border-light">
                                        Home <i class="bi bi-house"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br><br>

                <!--  TABLA: ASIGNACIONES DEL CLIENTE -->
                <div class="table-responsive h-50 w-75 mx-auto rounded-5">
                    <table class="table table-hover table-bordered">
                        <thead class="table-dark text-center">
                            <tr>
                                <th>ID</th>
                                <th>Cliente</th>
                                <th>Actividad</th>
                                <th>Estado</th>
                                <th>Fecha Reservación</th>
                                <th class="text-center">Asignación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                            $asigs = $asignaciones ?? array_filter(($datos ?? []), fn($r) => isset($r['asignacion_id']));
                            foreach ($asigs as $registro): ?>
                                <tr>
                                    <td><?= $registro['asignacion_id'] ?? '' ?></td>
                                    <td><?= $registro['cliente_id'] ?? '' ?></td>
                                    <td><?= $registro['actividad_id'] ?? '' ?></td>
                                    <td><?= $registro['estado'] ?? '' ?></td>
                                    <td><?= $registro['fecha_reservacion'] ?? '' ?></td>
                                    <td class="d-flex justify-content-center gap-2">
                                        <a href="<?= base_url('update_asignacion/') . ($registro['asignacion_id'] ?? ''); ?>"
                                           class="btn btn-outline-dark">
                                            <i class="bi bi-pin-angle fs-4"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <br><br>

                <!-- BUSCADOR POR CLIENTE  -->
                <form method="POST" action="<?= base_url('verAsignacionCliente'); ?>" class="d-flex gap-2">
                    <input type="text" name="cliente_id" id="txt_cliente_id" class="form-control"
                           placeholder="Código cliente"
                           value="<?= session()->get('cliente_id') ?? '' ?>">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form>

                <!-- TABLA: ACTIVIDADES DISPONIBLES -->
                <table class="table mt-5 table-hover table-bordered">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>ID</th>
                            <th>Personal</th>
                            <th>Actividad</th>
                            <th>Modalidad</th>
                            <th>Nivel</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Cupo</th>
                            <th>Asignados</th>
                            <th>Estatus</th>
                            <th class="text-center">Asignación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $acts = $actividades ?? array_filter(($datos ?? []), fn($r) => isset($r['actividad_id']));
                        foreach ($acts as $registro): ?>
                            <tr>
                                <td><?= $registro['actividad_id'] ?? '' ?></td>
                                <td><?= $registro['personal_id'] ?? '' ?></td>
                                <td><?= $registro['nombre'] ?? '' ?></td>
                                <td><?= $registro['modalidad'] ?? '' ?></td>
                                <td><?= $registro['nivel'] ?? '' ?></td>
                                <td><?= $registro['fecha'] ?? '' ?></td>
                                <td><?= $registro['hora'] ?? '' ?></td>
                                <td><?= $registro['cupo_maximo'] ?? '' ?></td>
                                <td><?= $registro['asignados'] ?? '' ?></td>
                                <td><?= $registro['reservacion'] ?? '' ?></td>

                                <td class="d-flex justify-content-center gap-2">
                                    <!-- ASIGNAR -->
                                    <form method="POST" action="<?= base_url('agregarAsignacion'); ?>" class="d-inline-flex gap-2 align-items-center">
                                        <input type="hidden" name="actividad_id" value="<?= $registro['actividad_id'] ?? '' ?>">
                                        <input type="hidden" name="cliente_id" value="">
                                        <button type="submit"
                                                class="btn btn-outline-dark"
                                                data-confirm
                                                data-method="form"
                                                data-confirm-title="¿Asignarte a esta clase?"
                                                data-confirm-text="Se creará tu reservación para esta actividad.">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                    </form>

                                    <!-- ELIMINAR -->
                                    <form method="POST" action="<?= base_url('buscar_asignacion'); ?>" class="d-inline-flex">
                                        <input type="hidden" name="actividad_id" value="<?= $registro['actividad_id'] ?? '' ?>">
                                        <input type="hidden" name="cliente_id" value="">
                                        <button type="submit"
                                                class="btn btn-outline-danger"
                                                data-confirm
                                                data-method="form"
                                                data-confirm-title="¿Eliminar asignación?"
                                                data-confirm-text="Esta acción no se puede deshacer."
                                                data-confirm-icon="warning">
                                            <i class="bi bi-trash"></i> Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <!-- Copia el cliente_id del input visible a los formularios al enviar -->
    <script>
      (function () {
        const clienteInput = document.getElementById('txt_cliente_id');
        document.querySelectorAll('form').forEach(function(form){
          form.addEventListener('submit', function(){
            const hiddenCliente = this.querySelector('input[name="cliente_id"]');
            if (hiddenCliente && clienteInput) {
              hiddenCliente.value = clienteInput.value || '';
            }
          });
        });
      })();
    </script>

    <?= view('partials/alerts_footer') ?>
    <script src="<?= base_url('js/app.js'); ?>"></script>
</body>
</html>

