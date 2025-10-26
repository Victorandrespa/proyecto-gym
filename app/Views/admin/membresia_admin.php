<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/background.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="../app.js"></script>

    <title>Membresias</title>
</head>

<body class="background-image-gestion-membresias container mt-4">


    <div class="container item-group" xyz="fade stagger">
        <div class="row align-items-center">
            <!-- Primera columna: Logo -->
            <div class="col-auto square xyz-in">
                <img src="<?= base_url('images/evolvere-logo-250.png') ?>" alt="Logo" class="img-fluid">
            </div>

            <!-- Segunda columna: 3 elementos alineados -->
            <div class="col">
                <div class="d-flex flex-column">
                    <h1 class="mt-5 text-light square xyz-in">GESTION DE MEMBRESIAS <i class="bi bi-floppy"></i></h1>
                    <h4 class="mb-5 text-light square xyz-in">ADMIN</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row justify-content-between align-items-center item-group" xyz="fade stagger">

        <a href="verAdminHome" class="btn btn btn-outline-dark text-light border border-light ms-5 square xyz-in">Home <i class="bi bi-house"></i></a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-dark my-2 text-light border border-light square xyz-in" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar membresia <i class="bi bi-plus-circle"></i>
        </button>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Membresia</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="agregarMembresia" method="post">


                        <input type="hidden" name="txt_membresia_id" id="txt_membresia_id" class="form-control">

                        <label for="txt_tipo_plan" class="form-label">Tipo de Plan:</label>
                        <input list="plan" name="txt_tipo_plan" id="txt_tipo_plan" class="form-control">
                        <datalist id="plan">
                             <?php foreach ($membresias as $t): ?>
                                <option value="<?= $t['tipo_plan'] ?>">
                                    <?= $t['tipo_plan'] ?>
                                </option>
                            <?php endforeach; ?>
                        </datalist>


                        <label for="txt_precio" class="form-label">Precio:</label>
                        <input type="number" name="txt_precio" id="txt_precio" class="form-control">

                        <label for="txt_duracion_meses" class="form-label">Duracion (meses):</label>
                        <input type="number" name="txt_duracion_meses" id="txt_duracion_meses" class="form-control">

                        <label for="txt_beneficios" class="form-label">Beneficios:</label>
                        <input type="text" name="txt_beneficios" id="txt_beneficios" class="form-control">

                        <label for="txt_sede" class="form-label">Sede:</label>
                        <select name="txt_sede" id="txt_sede" class="form-control" required>
                            <option value="">-- Seleccione Sede --</option>
                            <option value="CAES" <?= (isset($datos['sede_principal']) && $datos['sede_principal'] == 'CAES') ? 'selected' : '' ?>>CAES</option>
                            <option value="Zona14" <?= (isset($datos['sede_principal']) && $datos['sede_principal'] == 'Zona14') ? 'selected' : '' ?>>Zona14</option>
                            <option value="Todas" <?= (isset($datos['sede_principal']) && $datos['sede_principal'] == 'Todas') ? 'selected' : '' ?>>Todas</option>
                        </select>

                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit"
                                class="btn btn-outline-dark mt-2 justify-content-center">Guardar</button>
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

    <div class="table-responsive h-75 mx-auto rounded-5">
        <table class="table table-hover table-bordered">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Tipo de plan</th>
                    <th>Precio</th>
                    <th>Duracion en meses</th>
                    <th>Beneficios</th>
                    <th>sede</th>
                    <th class="text-center">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $registro) {
                ?>
                    <tr>
                        <td>
                            <?php echo ($registro['membresia_id']) ?>
                        </td>
                        <td>
                            <?= $registro['tipo_plan']; ?>
                        </td>
                        <td>
                            <?= $registro['precio']; ?>
                        </td>
                        <td>
                            <?= $registro['duracion_meses']; ?>
                        </td>
                        <td>
                            <?= $registro['beneficios']; ?>
                        </td>
                        <td>
                            <?= $registro['sede']; ?>
                        </td>

                        <td class="d-flex justify-content-center gap-2 ">
                            <a href="<?= base_url('update_membresia/') . $registro['membresia_id']; ?>"
                                class="btn btn-outline-dark"><i class="bi bi-pencil"></i></a>
                            <a href="<?= base_url('eliminar_membresia/') . $registro['membresia_id']; ?>"
                                class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>




</body>

</html>