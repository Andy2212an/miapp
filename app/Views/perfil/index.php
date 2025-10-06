<?= $this->extend('layouts/main') ?>
<?= $this->section('contenido') ?>

<div class="card p-4 shadow">
  <h3>Mi Perfil</h3>
  <div class="row">
    <div class="col-md-4 text-center">
      <img src="<?= base_url('public/images/users/' . (session()->get('avatar') ?? 'default.png')) . '?v=' . time() ?>" class="rounded-circle" width="150" height="150">

      <form action="<?= base_url('/perfil/actualizarAvatar') ?>" method="post" enctype="multipart/form-data" class="mt-3">
        <input type="file" name="avatar" class="form-control mb-2" required>
        <button class="btn btn-primary btn-sm">Actualizar Avatar</button>
      </form>
    </div>

    <div class="col-md-8">
      <p><strong>Nombre:</strong> <?= esc($usuario['nombres']) ?></p>
      <p><strong>Apellido:</strong> <?= esc($usuario['apellidos']) ?></p>
      <p><strong>Usuario:</strong> <?= esc($usuario['nomusuario']) ?></p>
      <p><strong>Rol:</strong> <?= esc($usuario['nivelacceso']) ?></p>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
