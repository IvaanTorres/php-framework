<?php
$this->layout('main', ['title' => 'Criticas - Editar']);
?>
<form action="<?= $_ENV['APP_URL'] ?>/peliculas/<?= $id_pelicula ?>/criticas/<?= $critica['id'] ?>" method="post">
    <input type="hidden" name="_method" value="put" />
    <div class="form-group">
        <label for="medio">Medio:</label>
        <input type="text" class="form-control" name="medio" placeholder="Medio..." value="<?= $critica['medio'] ?>" />
    </div>
    <div class="form-group">
        <label for="puntuacion">Puntuación:</label>
        <input type="number" step='0.1' min='0' max='5' class="form-control" name="puntuacion" placeholder="Puntuación..." value="<?= $critica['puntuacion'] ?>" />
    </div>
    <div class="form-group">
        <label for="precio">Critica:</label>
        <textarea class="form-control" name="critica" placeholder="Crítica..."><?= $critica['critica'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">
        Enviar
    </button>
</form>