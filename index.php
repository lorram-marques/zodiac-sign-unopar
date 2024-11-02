<?php include('layouts/header.php'); ?>

<h2 class="text-center mb-4">Descubra seu Signo Zodiacal</h2>
<form id="signo-form" method="POST" action="show_zodiac_sign.php" class="w-50 mx-auto">
    <div class="mb-3">
        <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">Consultar Signo</button>
</form>

<?php include('layouts/footer.php'); ?>
