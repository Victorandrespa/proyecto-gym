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
    <title>Puestos</title>

</head>

<body class="container mt-4 background-image-pagos-admin">


    <div class="container item-group" xyz="fade stagger">
        <div class="row align-items-center">
            <!-- Primera columna: Logo -->
            <div class="col-auto square xyz-in">
                <img src="<?= base_url('images/evolvere-logo-250.png') ?>" alt="Logo" class="img-fluid">
            </div>

            <!-- Segunda columna: 3 elementos alineados -->
            <div class="col">
                <div class="d-flex flex-column">
                    <h1 class="mt-5 text-light square xyz-in">GESTION DE PUESTOS <i class="bi bi-person-gear"></i></h1>
                    <h4 class="mb-5 text-light square xyz-in">ADMIN</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para agregar usuario -->

    <div class="d-flex flex-row justify-content-between align-items-center item-group" xyz="fade stagger">

        <div class="d-flex flex-column justify-content-between align-items-left">
            <a href="verAdminHome" class="btn btn btn-outline-dark my-1 ms-5 border border-light text-light square xyz-in">Home <i class="bi bi-house"></i></a>
            <a href="verPersonalAdmin" class="btn btn btn-outline-dark ms-5 border border-light text-light square xyz-in">Gestion de Personal <i
                    class="bi bi-person-rolodex"></i></a>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-dark my-1 border border-light text-light square xyz-in" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Nuevo puesto <i class="bi bi-person-plus"></i>
        </button>
    </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar nuevo Puesto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="agregarPuesto" method="post">

                        <label for="txt_puesto_id" class="form-label">Puesto ID</label>
                        <input type="text" name="txt_puesto_id" id="txt_puesto_id" class="form-control">

                        <label for="txt_rol" class="form-label">Rol: </label>
                        <input type="text" name="txt_rol" id="txt_rol" class="form-control">

                        <label for="txt_departamento" class="form-label">Departamento:</label>
                        <input type="text" name="txt_departamento" id="txt_departamento" class="form-control">

                        <label for="txt_descripcion" class="form-label">Descripcion:</label>
                        <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control">

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
                    <th>Rol</th>
                    <th>Departamento</th>
                    <th>Descripcion</th>
                    <th class="text-center">Editar</th>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $registro) {
                ?>
                    <tr>
                        <td>
                            <?php echo ($registro['puesto_id']) ?>
                        </td>
                        <td>
                            <?= $registro['rol']; ?>
                        </td>
                        <td>
                            <?= $registro['departamento']; ?>
                        </td>
                        <td>
                            <?= $registro['descripcion']; ?>
                        </td>



                        <td class="d-flex justify-content-center gap-2 ">
                            <a href="<?= base_url('update_puesto/') . $registro['puesto_id']; ?>"
                                class="btn btn-outline-dark"><i class="bi bi-pencil"></i></a>
                            <a href="<?= base_url('eliminar_puesto/') . $registro['puesto_id']; ?>"
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