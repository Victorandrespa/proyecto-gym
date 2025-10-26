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

    <title>Personal</title>
</head>

<body class="container mt-4 background-image-gestion-personal">


    <div class="container item-group" xyz="fade stagger">
        <div class="row align-items-center">
            <!-- Primera columna: Logo -->
            <div class="col-auto square xyz-in">
                <img src="<?= base_url('images/evolvere-logo-250.png') ?>" alt="Logo" class="img-fluid">
            </div>

            <!-- Segunda columna: 3 elementos alineados -->
            <div class="col">
                <div class="d-flex flex-column">
                    <h1 class="mt-5 text-light square xyz-in">GESTION PERSONAL <i class="bi bi-person-rolodex"></i></h1>
                    <h4 class="mb-5 text-light square xyz-in">ADMIN</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row justify-content-between align-items-center item-group" xyz="fade stagger">

        <a href="verAdminHome" class="ms-5 btn btn btn-outline-dark border border-light text-light square xyz-in">Home <i class="bi bi-house"></i></a>

        <!-- Button trigger modal -->
        <div class="d-flex flex-column align-items-right item-group" xyz="fade stagger">
            <button type="button" class="btn btn-outline-dark my-1 border border-light text-light square xyz-in" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Agregar Personal <i class="bi bi-person-plus"></i>
            </button>

            <a href="verPuestoAdmin" class="btn btn btn-outline-dark border border-light text-light square xyz-in">Ir a puestos <i
                    class="bi bi-person-gear"></i></a>
        </div>


    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Nuevo Personal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="agregarPersonal" method="post">

                        <label for="txt_personal_id" class="form-label">Personal ID:</label>
                        <input type="text" name="txt_personal_id" id="txt_personal_id" class="form-control">

                        <label for="txt_puesto_id" class="form-label">Puesto ID:</label>
                        <input type="text" name="txt_puesto_id" id="txt_puesto_id" class="form-control">

                        <label for="txt_nombre" class="form-label">Nombre:</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">

                        <label for="txt_apellido" class="form-label">Apellido:</label>
                        <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">

                        <label for="txt_telefono" class="form-label">Telefono:</label>
                        <input type="number" name="txt_telefono" id="txt_telefono" class="form-control">

                        <label for="txt_email" class="form-label">Email:</label>
                        <input type="email" name="txt_email" id="txt_email" class="form-control">

                        <label for="txt_fecha_contratacion" class="form-label">Fecha Contratacion:</label>
                        <input type="date" name="txt_fecha_contratacion" id="txt_fecha_contratacion"
                            class="form-control">

                        <label for="txt_estado" class="form-label">Estado:</label>
                        <input type="text" name="txt_estado" id="txt_estado" class="form-control">

                        <label for="txt_horario" class="form-label">Horario:</label>
                        <input type="number" name="txt_horario" id="txt_horario" class="form-control">

                        <label for="txt_sede" class="form-label">Sede:</label>
                        <input type="text" name="txt_sede" id="txt_sede" class="form-control">

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
                    <th>Puesto</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Fecha de Contratacion</th>
                    <th>Estado</th>
                    <th>Horario</th>
                    <th>Sede</th>
                    <th class="text-center">Editar</th>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $registro) {
                ?>
                    <tr>
                        <td>
                            <?php echo ($registro['personal_id']) ?>
                        </td>
                        <td>
                            <?= $registro['puesto_id']; ?>
                        </td>
                        <td>
                            <?= $registro['nombre']; ?>
                        </td>
                        <td>
                            <?= $registro['apellido']; ?>
                        </td>
                        <td>
                            <?= $registro['telefono']; ?>
                        </td>
                        <td>
                            <?= $registro['email']; ?>
                        </td>
                        <td>
                            <?= $registro['fecha_contratacion']; ?>
                        </td>
                        <td>
                            <?= $registro['estado']; ?>
                        </td>
                        <td>
                            <?= $registro['horario']; ?>
                        </td>
                        <td>
                            <?= $registro['sede_principal']; ?>
                        </td>


                        <td class="d-flex justify-content-center gap-2 ">
                            <a href="<?= base_url('update_personal/') . $registro['personal_id']; ?>" class="btn btn-outline-dark"><i
                                    class="bi bi-pencil"></i></a>
                            <a href="<?= base_url('eliminar_personal/') . $registro['personal_id']; ?>"
                                class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>


    <br><br>




</body>

</html>