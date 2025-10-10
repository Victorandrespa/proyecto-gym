<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Personal</title>
</head>

<body class="container mt-4">


    <h1 class="mt-5">Gestiones Administrativas</h1>
    <h4 class="mb-4">Personal</h4>
    <!-- <a href="log" class="btn btn-outline-dark">LOG IN  <i class="bi bi-people-fill"></i></a>
        <br> -->

    <div class="d-flex flex-row justify-content-between align-items-center">

        <a href="verHome" class="btn btn btn-outline-dark">Menu Principal <i class="bi bi-house"></i></a>
        <!-- Button trigger modal -->

    </div>

    <div class="d-flex justify-content-around mt-3">

        <div class="d-grid gap-2 mt-5" style="width: 50%;">
            <a href="verActividadPersonal" class="btn btn-outline-dark fs-4">Gestionar Actividades <i
                    class="bi bi-flag"></i></a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-dark fs-4" data-bs-toggle="modal"
                data-bs-target="#exampleModal2">
                Registro de Clientes <i class="bi bi-person"></i>
            </button>

            <a href="verClientePersonal" class="btn btn-outline-dark fs-4">Base de datos Clientes <i
                    class="bi bi-database"></i></a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-dark fs-4" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Procesar un pago <i class="bi bi-credit-card"></i>
            </button>

            
            <a href="verEstadoMembresiaCliente" class="btn btn-outline-dark fs-4">Estados membresias <i
                    class="bi bi-file-bar-graph"></i></a>

            <a href="verHistorialMedicionPersonal" class="btn btn-outline-dark fs-4">Historial Medicion <i
                    class="bi bi-clipboard-check"></i></a>

            


        </div>

    </div>


    <!-- Modal Pagos  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Realizar un Pago</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="agregarPago" method="post">

                        <label for="txt_actividad_id" class="form-label">ID:</label>
                        <input type="text" name="txt_actividad_id" id="txt_actividad_id" class="form-control">

                        <label for="txt_personal_id" class="form-label">Cliente ID:</label>
                        <input type="text" name="txt_personal_id" id="txt_personal_id" class="form-control">

                        <label for="txt_nombre" class="form-label">Membresia ID:</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">

                        <label for="txt_modalidad" class="form-label">Fecha de pago:</label>
                        <input type="date" name="txt_modalidad" id="txt_modalidad" class="form-control">

                        <label for="txt_nivel" class="form-label">Monto:</label>
                        <input type="number" name="txt_nivel" id="txt_nivel" class="form-control">

                        <label for="txt_cupo" class="form-label">Concepto:</label>
                        <input type="text" name="txt_cupo" id="txt_cupo" class="form-control">

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


    <!-- Modal Clientes -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="agregarCliente" method="post">

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
                        <input type="text" name="txt_contacto_emergencia" id="txt_contacto_emergencia"
                            class="form-control">

                        <label for="txt_telefono_emergencia" class="form-label">Telefono de Emergencia:</label>
                        <input type="number" name="txt_telefono_emergencia" id="txt_telefono_emergencia"
                            class="form-control">

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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>


</body>

</html>