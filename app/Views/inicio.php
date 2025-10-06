<?= $this->extend('layouts/main') ?>
<?= $this->section('contenido') ?>

<h2>Bienvenido, <?= esc(session()->get('nombres')) ?> 👋</h2>
<p>Este es el panel principal de la aplicación.</p>

<div class="row mt-4">
  <div class="col-md-4">
    <div class="card shadow-sm">
      <div class="card-body text-center">
        <h5>Gestión de usuarios</h5>
        <p>Administra los usuarios del sistema.</p>
        <a href="#" class="btn btn-outline-primary btn-sm">Ir</a>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card shadow-sm">
      <div class="card-body text-center">
        <h5>Reportes</h5>
        <p>Consulta estadísticas del sistema.</p>
        <a href="#" class="btn btn-outline-success btn-sm">Ver</a>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
