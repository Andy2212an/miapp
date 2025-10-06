<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title><?= esc($titulo ?? 'MiApp') ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
    }
  </style>
</head>
<body>

  <!-- 🔹 Navbar Global -->
  <?php 
    $nombre = session()->get('nomusuario');
    $avatar = session()->get('avatar');
  ?>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
      <a class="navbar-brand" href="<?= base_url('/inicio') ?>">MiApp</a>

      <div class="ms-auto dropdown">
          <a class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" href="#" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="<?= base_url('public/images/users/' . (!empty($avatar) ? $avatar : 'default.png')) . '?v=' . time() ?>" class="avatar me-2">
              <?= esc($nombre) ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
              <li><a class="dropdown-item" href="<?= base_url('/perfil') ?>">Mi Perfil</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-danger" href="<?= base_url('/logout') ?>">Cerrar Sesión</a></li>
          </ul>
      </div>
  </nav>

  <!-- 🔹 Contenido de cada vista -->
  <div class="container mt-4">
    <?= $this->renderSection('contenido') ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
