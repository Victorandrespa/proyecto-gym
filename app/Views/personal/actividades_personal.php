<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/background-personal.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">
    <title>Actividades</title>
</head>

<body class="container mt-4 background-image-personal-gestionar-actividades">

    <div class="container">
        <div class="row align-items-center item-group" xyz="fade stagger">
            <!-- Primera columna: Logo -->
            <div class="col-auto square xyz-in">
                <img src="<?= base_url('images/evolvere-logo-250.png') ?>" alt="Logo" class="img-fluid">
            </div>

            <!-- Segunda columna -->
            <div class="col">
                <div class="d-flex flex-column">
                    <h1 class="mt-5 text-light square xyz-in">CALENDARIO DE ACTIVIDADES <i class="bi bi-floppy"></i></h1>
                    <h4 class="mb-5 text-light square xyz-in">ENTRENADOR</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row justify-content-between align-items-center item-group" xyz="fade stagger">
        <a href="verPersonalHome" class="btn btn btn-outline-dark text-light border border-light ms-5 square xyz-in">Home <i class="bi bi-house"></i></a>

        <!-- Botón para agregar -->
        <button type="button" class="btn btn-outline-dark my-2 text-light border border-light square xyz-in" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar actividad <i class="bi bi-flag"></i>
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Actividad</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="agregarActividad" method="post">

                        <input type="hidden" name="txt_actividad_id" id="txt_actividad_id" class="form-control">

                        <label for="txt_personal_id" class="form-label">Personal id</label>
                        <select name="txt_personal_id" id="txt_personal_id" class="form-control" required>
                            <option value="">-- Seleccione Personal --</option>
                            <?php foreach ($personal as $m): ?>
                                <option value="<?= $m['personal_id'] ?>">
                                    <?= $m['personal_id'] . ' - ' . $m['nombre'] . ' - ' . $m['apellido'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>

                        <label for="txt_nombre" class="form-label">Nombre:</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">

                        <label for="txt_modalidad" class="form-label">Modalidad:</label>
                        <select name="txt_modalidad" id="txt_modalidad" class="form-control" required>
                            <option value="">- Seleccione Modalidad -</option>
                            <option value="Personal" <?= (isset($datos['modalidad']) && $datos['modalidad'] == 'Personal') ? 'selected' : '' ?>>Personal</option>
                            <option value="Virtual" <?= (isset($datos['modalidad']) && $datos['modalidad'] == 'Virtual') ? 'selected' : '' ?>>Virtual</option>
                            <option value="Presencial" <?= (isset($datos['modalidad']) && $datos['modalidad'] == 'Presencial') ? 'selected' : '' ?>>Presencial</option>
                        </select>

                        <label for="txt_nivel" class="form-label">Nivel:</label>
                        <select name="txt_nivel" id="txt_nivel" class="form-control" required>
                            <option value="">- Seleccione Nivel -</option>
                            <option value="Principiante" <?= (isset($datos['nivel']) && $datos['nivel'] == 'Principiante') ? 'selected' : '' ?>>Principiante</option>
                            <option value="Intermedio" <?= (isset($datos['nivel']) && $datos['nivel'] == 'Intermedio') ? 'selected' : '' ?>>Intermedio</option>
                            <option value="Avanzado" <?= (isset($datos['nivel']) && $datos['nivel'] == 'Avanzado') ? 'selected' : '' ?>>Avanzado</option>
                        </select>

                        <label for="txt_fecha" class="form-label">Fecha:</label>
                        <input type="date" name="txt_fecha" id="txt_fecha" class="form-control">

                        <label for="txt_hora" class="form-label">Hora:</label>
                        <input type="number" name="txt_hora" id="txt_hora" class="form-control">

                        <label for="txt_cupo" class="form-label">Cupo Maximo:</label>
                        <input type="number" name="txt_cupo" id="txt_cupo" class="form-control">

                        <div class="d-flex justify-content-center mt-3">
                            <!-- Confirmación antes de enviar -->
                            <button type="submit"
                                class="btn btn-outline-dark mt-2 justify-content-center"
                                data-confirm
                                data-method="form"
                                data-confirm-title="¿Guardar actividad?"
                                data-confirm-text="Se registrará una nueva actividad.">
                                Guardar
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <br><br>

    <!-- Tabla de resultados -->
    <table class="table mt-5 table-hover table-bordered">
        <thead class="table-dark text-center">
            <tr>
                <th>Actividad</th>
                <th>Personal</th>
                <th>Nombre</th>
                <th>Modalidad</th>
                <th>Nivel</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Cupo</th>
                <th class="text-center">Asignacion</th>
        </thead>
        <tbody>
            <?php foreach ($datos as $registro): ?>
                <tr>
                    <td><?= $registro['actividad_id'] ?></td>
                    <td><?= $registro['personal_id']; ?></td>
                    <td><?= $registro['nombre']; ?></td>
                    <td><?= $registro['modalidad']; ?></td>
                    <td><?= $registro['nivel']; ?></td>
                    <td><?= $registro['fecha']; ?></td>
                    <td><?= $registro['hora']; ?></td>
                    <td><?= $registro['cupo_maximo']; ?></td>

                    <td class="d-flex justify-content-center gap-2 ">
                        <a href="<?= base_url('update_actividad/') . $registro['actividad_id']; ?>"
                            class="btn btn-outline-dark"><i class="bi bi-pencil"></i></a>
                        <!-- Confirmación antes de eliminar -->
                        <a href="<?= base_url('eliminar_actividad/') . $registro['actividad_id']; ?>"
                            class="btn btn-outline-danger"
                            data-confirm
                            data-confirm-title="¿Eliminar actividad?"
                            data-confirm-text="Esta acción no se puede deshacer."
                            data-confirm-icon="warning">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?= view('partials/alerts_footer') ?>
    <script src="<?= base_url('js/app.js'); ?>"></script>
</body>
</html>
