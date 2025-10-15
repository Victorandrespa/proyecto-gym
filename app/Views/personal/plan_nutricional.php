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

    <title>Plan Nutricional</title>
</head>

<body class="container mt-4">


    <h1 class="mt-5">Plan Nutricional <i class="bi bi-bar-chart"></i></h1>
    <h4 class="mb-5">Personal</h4>
    <!-- <a href="log" class="btn btn-outline-dark">LOG IN <i class="bi bi-people-fill"></i></a>
    <br> -->

    <!-- Modal para agregar usuario -->

    <div class="d-flex flex-row justify-content-between align-items-center">


        <div class="d-flex flex-column align-items-left">
            <a href="verPersonalHome" class="btn btn btn-outline-dark mb-1">Home Principal<i class="bi bi-house"></i></a>
            <a href="verHistorialMedicionPersonal" class="btn btn btn-outline-dark">Regresar Historial <i class="bi bi-arrow-return-left"></i></a>
        </div>

        <button type="button" class="btn btn-outline-dark my-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agrega Plan Nutricional <i class="bi bi-clipboard2-check"></i>
        </button>


    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Plan Nutricional</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="agregarPlanNutricion" method="post">

                        <label for="txt_plan_id" class="form-label">Plan ID:</label>
                        <input type="text" name="txt_plan_id" id="txt_plan_id" class="form-control">

                        <label for="txt_personal_id" class="form-label">Personal ID:</label>
                        <input type="text" name="txt_personal_id" id="txt_personal_id" class="form-control">

                        <label for="txt_objetivo" class="form-label">Objetivo:</label>
                        <input type="text" name="txt_objetivo" id="txt_objetivo" class="form-control">

                        <label for="txt_duracion" class="form-label">Duracion:</label>
                        <input type="number" name="txt_duracion" id="txt_duracion" class="form-control">

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

    <table class="table mt-5 table-hover table-bordered">
        <thead class="table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Personal </th>
                <th>Objetivo</th>
                <th>Duracion</th>
                <th>Descripcion</th>
                <th class="text-center">Editar</th>
        </thead>
        <tbody>
            <?php
            foreach ($datos as $registro) {
            ?>
                <tr>
                    <td>
                        <?php echo ($registro['plan_id']) ?>
                    </td>
                    <td>
                        <?= $registro['personal_id']; ?>
                    </td>
                    <td>
                        <?= $registro['objetivo']; ?>
                    </td>
                    <td>
                        <?= $registro['duracion']; ?>
                    </td>
                    <td>
                        <?= $registro['descripcion']; ?>
                    </td>



                    <td class="d-flex justify-content-center gap-2 ">
                        <a href="<?= base_url('update_plan_nutricion/') . $registro['plan_id']; ?>"
                            class="btn btn-outline-dark"><i class="bi bi-pencil"></i></a>
                        <a href="<?= base_url('eliminar_plan_nutricion/') . $registro['plan_id']; ?>"
                            class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>






</body>

</html>