<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/background-clientes.css'); ?>">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="../app.js"></script>
    <title>Asignacion</title>
</head>



<body class="container mt-4 background-image-clientes-asignacion">


    <div class="container">
        <div class="row align-items-center">
            <!-- Primera columna: Logo -->
            <div class="col-auto">
                <img src="<?= base_url('images/logo-white-char250.png') ?>" alt="Logo" class="img-fluid">
            </div>

            <!-- Segunda columna: 3 elementos alineados -->
            <div class="col">
                <div class="d-flex flex-column">
                    <h1 class="mt-5 text-light">ASIGNACIONES <i class="bi bi-calendar-check"></i></h1>
                    <h4 class="mb-5 text-light">CLIENTE</h4>
                </div>
            </div>
        </div>
    </div>


    <div class="d-flex flex-row justify-content-between align-items-center">
        <a href="verClienteHome" class="btn btn btn-outline-dark text-light border border-light ms-5">Home <i class="bi bi-house"></i></a>
    </div>


    <br><br>


   
    <form method="POST" action="<?= base_url('verAsignacionCliente'); ?>" class="d-flex gap-2">
        <input type="text" name="cliente_id" id="txt_cliente_id" class="form-control"
            placeholder="Código cliente"
            value="<?= session()->get('cliente_id') ?? '' ?>">
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>


    <!-- Tabla de resultados -->

    <table class="table mt-5 table-hover table-bordered">
        <thead class="table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Actividad</th>
                <th>Personal </th>
                <th>Modalidad</th>
                <th>Nivel</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Cupo</th>
                <th>Asignados</th>
                <th>Estatus</th>
                <th class="text-center">Asignacion</th>
            </tr>
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
                        <?= $registro['fecha']; ?>
                    </td>
                    <td>
                        <?= $registro['hora']; ?>
                    </td>
                    <td>
                        <?= $registro['cupo_maximo']; ?>
                    </td>
                    <td>
                        <?= $registro['asignados']; ?>
                    </td>
                    <td>
                        <?= $registro['reservacion']; ?>
                    </td>

                    <td class="d-flex justify-content-center gap-2">
                        <button
                            class="btn btn-outline-dark btn-agregar"
                            data-actividad="<?= $registro['actividad_id']; ?>">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <form method="POST" action="<?= base_url('buscar_asignacion'); ?>" onsubmit="return confirm('¿Seguro que deseas eliminar esta asignación?');">
                            <input type="hidden" name="actividad_id" value="<?= $registro['actividad_id']; ?>">
                            <input type="hidden" name="cliente_id" id="cliente_id_hidden_<?= $registro['actividad_id']; ?>">
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="bi bi-trash"></i> Eliminar
                            </button>
                        </form>

                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>

<script>
    document.querySelectorAll('.btn-agregar').forEach(btn => {
        btn.addEventListener('click', () => {
            const actividadId = btn.getAttribute('data-actividad');
            const clienteId = document.getElementById('txt_cliente_id').value;

            if (!clienteId) {
                alert("Debes ingresar tu ID de cliente.");
                return;
            }

            if (confirm("¿Deseas asignarte a esta clase?")) {
                // Crear formulario dinámico
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '<?= base_url("agregarAsignacion") ?>';

                // Inputs ocultos
                const inputActividad = document.createElement('input');
                inputActividad.type = 'hidden';
                inputActividad.name = 'actividad_id';
                inputActividad.value = actividadId;

                const inputCliente = document.createElement('input');
                inputCliente.type = 'hidden';
                inputCliente.name = 'cliente_id';
                inputCliente.value = clienteId;

                // Añadir inputs al form
                form.appendChild(inputActividad);
                form.appendChild(inputCliente);

                // Añadir form al body y enviarlo
                document.body.appendChild(form);
                form.submit();
            }
        });
    });

    // Cada vez que se envíe un formulario, se copia el clienteId del input principal
    const clienteInput = document.getElementById('txt_cliente_id');

    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function() {
            const hiddenInput = this.querySelector('input[name="cliente_id"]');
            hiddenInput.value = clienteInput.value;
        });
    });
</script>


</html>