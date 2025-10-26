<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login - <?= ucfirst($tipo) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/background.css'); ?>">
</head>

<body class="d-flex align-items-center justify-content-center vh-100 bg-light background-image">

    <div class="card p-4 shadow-lg" style="width: 400px;">
        <h3 class="text-center mb-3">Login <?= ucfirst($tipo) ?></h3>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <form action="<?= base_url('login') ?>" method="post">
            <input type="hidden" name="tipo" value="<?= esc($tipo) ?>">

            <div class="mb-3">
                <label class="form-label">Usuario</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-dark w-100">Entrar</button>
        </form>

        <div class="text-center mt-3">
            <a href="<?= base_url('/') ?>" class="text-secondary">Volver</a>
        </div>
    </div>

</body>

</html>