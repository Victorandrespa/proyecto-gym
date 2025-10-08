<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="../app.js"></script>

    <title>Registo clientes</title>
</head>

<body class="container mt-4">


    <h1 class="mt-5">Base de datos Clientes <i class="bi bi-database"></i></h1>
    <h4 class="mb-5">Personal</h4>
    <!-- <a href="log" class="btn btn-outline-dark">LOG IN <i class="bi bi-people-fill"></i></a>
    <br> -->

    <!-- Modal para agregar usuario -->

    <div class="d-flex flex-row justify-content-between align-items-center">

        <a href="../home_principal.html" class="btn btn btn-outline-dark">Home Principal<i class="bi bi-house"></i></a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-dark my-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agrega un Cliente <i class="bi bi-person-plus"></i>
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
                    <form action="agregarEditorial" method="post">

                        <label for="txt_cliente_id" class="form-label">Cliente ID:</label>
                        <input type="text" name="txt_cliente_id" id="txt_cliente_id" class="form-control">

                        <label for="txt_nombre" class="form-label">Nombre:</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">

                        <label for="txt_apellido" class="form-label">Apellido:</label>
                        <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">

                        <label for="txt_edad" class="form-label">Edad:</label>
                        <input type="number" name="txt_edad" id="txt_edad" class="form-control">

                        <label for="txt_telefono" class="form-label">Telefono:</label>
                        <input type="number" name="txt_telefono" id="txt_telefono" class="form-control">

                        <label for="txt_email" class="form-label">Email:</label>
                        <input type="email" name="txt_email" id="txt_email" class="form-control">

                        <label for="txt_contacto_emergencia" class="form-label">Contacto de Emergencia:</label>
                        <input type="text" name="txt_contacto_emergencia" id="txt_contacto_emergencia" class="form-control">

                        <label for="txt_telefono_emergencia" class="form-label">Telefono de Emergencia:</label>
                        <input type="number" name="txt_telefono_emergencia" id="txt_telefono_emergencia" class="form-control">

                        <label for="txt_fecha_registro" class="form-label">Fecha de Registro:</label>
                        <input type="date" name="txt_fecha_registro" id="txt_fecha_registro" class="form-control">

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

    <table class="table mt-5 table-hover table-bordered">
        <thead class="table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Nombre </th>
                <th>Apellido </th>
                <th>Edad </th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Contacto de Emergencia</th>
                <th>Telefono de Emergencia</th>
                <th>Fecha de Registro</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($datos as $registro) {
                    ?>
            <tr>
                <td>
                    <?php echo ($registro['cliente_id']) ?>
                </td>
                <td>
                    <?= $registro['nombre']; ?>
                </td>
                <td>
                    <?= $registro['apellido']; ?>
                </td>
                <td>
                    <?= $registro['edad']; ?>
                </td>
                <td>
                    <?= $registro['telefono']; ?>
                </td>
                <td>
                    <?= $registro['email']; ?>
                </td>
                <td>
                    <?= $registro['contacto_emergencia']; ?>
                </td>
                <td>
                    <?= $registro['telefono_emergencia']; ?>
                </td>
                 <td>
                    <?= $registro['fecha_registro']; ?>
                </td>                

            </tr>
            <?php
                }
                ?>
        </tbody>
    </table>




</body>

</html>