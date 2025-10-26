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

            <!-- Segunda columna: 3 elementos alineados -->
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
        <!-- Button trigger modal -->
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

                        <label for="txt_actividad_id" class="form-label">Actividad ID</label>
                        <input type="text" name="txt_actividad_id" id="txt_actividad_id" class="form-control">

                        <label for="txt_personal_id" class="form-label">Personal id</label>
                        <input type="text" name="txt_personal_id" id="txt_personal_id" class="form-control">

                        <label for="txt_nombre" class="form-label">Nombre:</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">

                        <label for="txt_modalidad" class="form-label">Modalidad:</label>
                        <input type="text" name="txt_modalidad" id="txt_modalidad" class="form-control">

                        <label for="txt_nivel" class="form-label">Nivel:</label>
                        <input type="text" name="txt_nivel" id="txt_nivel" class="form-control">

                        <label for="txt_cupo" class="form-label">Cupo Maximo:</label>
                        <input type="number" name="txt_cupo" id="txt_cupo" class="form-control">

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
                    <th>Actividad</th>
                    <th>Personal</th>
                    <th>Nombre</th>
                    <th>Modalidad</th>
                    <th>Nivel</th>
                    <th>Cupo</th>
                    <th class="text-center">Asignacion</th>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $registro) {
                ?>
                    <tr>
                        <td>
                            <?php echo ($registro['actividad_id']) ?>
                        </td>
                        <td>
                            <?= $registro['personal_id']; ?>
                        </td>
                        <td>
                            <?= $registro['nombre']; ?>
                        </td>
                        <td>
                            <?= $registro['modalidad']; ?>
                        </td>
                        <td>
                            <?= $registro['nivel']; ?>
                        </td>
                        <td>
                            <?= $registro['cupo_maximo']; ?>
                        </td>

                        <td class="d-flex justify-content-center gap-2 ">
                            <a href="<?= base_url('update_actividad/') . $registro['actividad_id']; ?>"
                                class="btn btn-outline-dark"><i class="bi bi-pencil"></i></a>
                            <a href="<?= base_url('eliminar_actividad/') . $registro['actividad_id']; ?>"
                                class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="../app.js"></script>


</body>

</html>