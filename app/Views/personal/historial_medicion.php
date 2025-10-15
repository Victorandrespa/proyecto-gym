<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Historial Medicion</title>
</head>

<body class="container mt-4">


    <h1 class="mt-5">Historial de Medicion</h1>
    <h4 class="mb-5">Personal</h4>
    <!-- <a href="log" class="btn btn-outline-dark">LOG IN <i class="bi bi-people-fill"></i></a>
    <br> -->

    <!-- Modal para agregar usuario -->

    <div class="d-flex flex-row justify-content-between align-items-center">

        <a href="verPersonalHome" class="btn btn btn-outline-dark">Home <i class="bi bi-house"></i></a>
        <!-- Button trigger modal -->

        <div class="d-flex flex-column align-items-right">
            <button type="button" class="btn btn-outline-dark my-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Agregar Historial <i class="bi bi-folder2-open"></i>
            </button>

            <a href="verPlanNutricionPersonal" class="btn btn btn-outline-dark">Planes Nutricionales <i class="bi bi-clipboard-heart"></i></a>
        </div>


    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Historial de Medicion</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="agregarMedicion" method="post">

                        <label for="txt_medicion_id" class="form-label">Medicion ID</label>
                        <input type="text" name="txt_medicion_id" id="txt_medicion_id" class="form-control">

                        <label for="txt_plan_id" class="form-label">Plan id</label>
                        <input type="text" name="txt_plan_id" id="txt_plan_id" class="form-control">

                        <label for="txt_cliente_id" class="form-label">Cliente ID:</label>
                        <input type="text" name="txt_cliente_id" id="txt_cliente_id" class="form-control">

                        <label for="txt_fecha_medicion" class="form-label">Fecha de medicion:</label>
                        <input type="date" name="txt_fecha_medicion" id="txt_fecha_medicion" class="form-control">

                        <label for="txt_peso" class="form-label">Peso:</label>
                        <input type="number" name="txt_peso" id="txt_peso" class="form-control">

                        <label for="txt_altura" class="form-label">Altura:</label>
                        <input type="number" name="txt_altura" id="txt_altura" class="form-control">

                        <label for="txt_indice_masaCorporal" class="form-label">Indice Masa Corporal:</label>
                        <input type="number" name="txt_indice_masaCorporal" id="txt_indice_masaCorporal"
                            class="form-control">

                        <label for="txt_promedio_calorias" class="form-label">Promedio Calorias:</label>
                        <input type="number" name="txt_promedio_calorias" id="txt_promedio_calorias"
                            class="form-control">

                        <label for="txt_observaciones" class="form-label">Observaciones:</label>
                        <input type="text" name="txt_observaciones" id="txt_observaciones" class="form-control">

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
                <th>Plan</th>
                <th>Cliente</th>
                <th>Fecha Medicion</th>
                <th>Peso</th>
                <th>Altura</th>
                <th>IMC</th>
                <th>Calorias</th>
                <th>Observaciones</th>
                <th class="text-center">Asignacion</th>
        </thead>
        <tbody>
            <?php
            foreach ($datos as $registro) {
            ?>
                <tr>
                    <td>
                        <?php echo ($registro['medicion_id']) ?>
                    </td>
                    <td>
                        <?= $registro['plan_id']; ?>
                    </td>
                    <td>
                        <?= $registro['cliente_id']; ?>
                    </td>
                    <td>
                        <?= $registro['fecha_medicion']; ?>
                    </td>
                    <td>
                        <?= $registro['peso']; ?>
                    </td>
                    <td>
                        <?= $registro['altura']; ?>
                    </td>
                    <td>
                        <?= $registro['indice_masaCorporal']; ?>
                    </td>
                    <td>
                        <?= $registro['promedio_calorias']; ?>
                    </td>
                    <td>
                        <?= $registro['observaciones']; ?>
                    </td>


                    <td class="d-flex justify-content-center gap-2 ">
                        <a href="<?= base_url('update_medicion/') . $registro['medicion_id']; ?>"
                            class="btn btn-outline-dark"><i class="bi bi-pencil"></i></a>
                        <a href="<?= base_url('eliminar_medicion/') . $registro['medicion_id']; ?>"
                            class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="../app.js"></script>


</body>

</html>