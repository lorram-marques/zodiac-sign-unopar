<?php include('layouts/header.php'); ?>

<?php
$data_nascimento = $_POST['data_nascimento'];
$signos = simplexml_load_file("signos.xml");

$signoEncontrado = null;

foreach ($signos->signo as $signo) {
    $dataInicio = DateTime::createFromFormat('d/m', (string)$signo->dataInicio);
    $dataFim = DateTime::createFromFormat('d/m', (string)$signo->dataFim);
    $dataNascimento = DateTime::createFromFormat('Y-m-d', $data_nascimento);

    $dataInicio->setDate($dataNascimento->format('Y'), $dataInicio->format('m'), $dataInicio->format('d'));
    $dataFim->setDate($dataNascimento->format('Y'), $dataFim->format('m'), $dataFim->format('d'));

    if ($dataNascimento >= $dataInicio && $dataNascimento <= $dataFim) {
        $signoEncontrado = $signo;
        break;
    }
}

if ($signoEncontrado) {
    echo "<h2 class='text-center'>Seu Signo: {$signoEncontrado->signoNome}</h2>";
    echo "<p class='text-center'>{$signoEncontrado->descricao}</p>";
} else {
    echo "<p class='text-center'>Não foi possível identificar seu signo.</p>";
}
?>

<div class="text-center mt-4">
    <a href="index.php" class="btn btn-secondary">Voltar</a>
</div>

<?php include('layouts/footer.php'); ?>
