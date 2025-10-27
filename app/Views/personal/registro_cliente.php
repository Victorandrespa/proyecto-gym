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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <title>Registro Clientes</title>
</head>

<body class="container mt-4 background-image-personal-base-clientes">

    <div class="container">
        <div class="row align-items-center item-group" xyz="fade stagger">
            <div class="col-auto square xyz-in">
                <img src="<?= base_url('images/evolvere-logo-250.png') ?>" alt="Logo" class="img-fluid">
            </div>

            <div class="col">
                <div class="d-flex flex-column">
                    <h1 class="mt-5 text-light square xyz-in">BASE DE DATOS CLIENTES <i class="bi bi-database"></i></h1>
                    <h4 class="mb-5 text-light square xyz-in">PERSONAL</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row justify-content-between align-items-center item-group" xyz="fade stagger">
        <a href="verPersonalHome" class="btn btn-outline-dark text-light border border-light ms-5 square xyz-in">Home Principal <i class="bi bi-house"></i></a>

        <button type="button" class="btn btn-outline-dark my-2 text-light border border-light square xyz-in"
            data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Cliente <i class="bi bi-person-plus"></i>
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="agregarCliente" method="post">

                        <input type="hidden" name="txt_cliente_id" id="txt_cliente_id" class="form-control">

                        <label for="txt_nombre" class="form-label">Nombre:</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" required>

                        <label for="txt_apellido" class="form-label">Apellido:</label>
                        <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" required>

                        <label for="txt_edad" class="form-label">Edad:</label>
                        <input type="number" name="txt_edad" id="txt_edad" class="form-control" required>

                        <label for="txt_telefono" class="form-label">Teléfono:</label>
                        <input type="number" name="txt_telefono" id="txt_telefono" class="form-control" required>

                        <label for="txt_email" class="form-label">Email:</label>
                        <input type="email" name="txt_email" id="txt_email" class="form-control" required>

                        <label for="txt_contacto_emergencia" class="form-label">Contacto de Emergencia:</label>
                        <input type="text" name="txt_contacto_emergencia" id="txt_contacto_emergencia" class="form-control">

                        <label for="txt_telefono_emergencia" class="form-label">Teléfono de Emergencia:</label>
                        <input type="number" name="txt_telefono_emergencia" id="txt_telefono_emergencia" class="form-control">

                        <label for="txt_fecha_registro" class="form-label">Fecha de Registro:</label>
                        <input type="date" name="txt_fecha_registro" id="txt_fecha_registro" class="form-control" required>

                        <div class="d-flex justify-content-center mt-3">
                            <!-- ✅ Confirmación antes de guardar -->
                            <button type="submit"
                                class="btn btn-outline-dark mt-2 justify-content-center"
                                data-confirm
                                data-method="form"
                                data-confirm-title="¿Registrar cliente?"
                                data-confirm-text="Se agregará un nuevo cliente a la base de datos.">
                                Guardar
                            </button>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Contacto de Emergencia</th>
                    <th>Teléfono Emergencia</th>
                    <th>Fecha Registro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $registro): ?>
                    <tr>
                        <td><?= $registro['cliente_id'] ?></td>
                        <td><?= $registro['nombre'] ?></td>
                        <td><?= $registro['apellido'] ?></td>
                        <td><?= $registro['edad'] ?></td>
                        <td><?= $registro['telefono'] ?></td>
                        <td><?= $registro['email'] ?></td>
                        <td><?= $registro['contacto_emergencia'] ?></td>
                        <td><?= $registro['telefono_emergencia'] ?></td>
                        <td><?= $registro['fecha_registro'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?= view('partials/alerts_footer') ?>
    <script src="<?= base_url('js/app.js'); ?>"></script>
</body>
</html>
