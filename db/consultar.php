<div class="title">Consultar Registros</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<?php

require_once "conexao.php";

$sql = "SELECT * FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

//array para receber os resultados
$registros = [];

//verificação de erro, ver se o numero de linhas do array é maior do que zero
if ($resultado->num_rows > 0){

    while($row = $resultado->fetch_assoc()){
        $registros [] = $row;
    }

//abaixo verificar se o erro não foi por motivo de conexao com o banco
}elseif($conexao->error)
{
    echo "Erro de conexao com banco " . $conexao->error;
}else{
    echo "Erro dados não vindo do banco ";
}

//print_r($registros);
$conexao->close();
?>

<table class="table table-hover table-bordered">
    <thead>
        <th>ID</th>
        <th>Imobiliaria</th>
        <th>Email</th>
        <th>CRM</th>
        <th>Observações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $reg): ?>
            <tr>
                <td><?= $reg['id'] ?></td>
                <td><?= $reg['imobiliaria'] ?></td>
                <td><?= $reg['emails'] ?></td>
                <td><?= $reg['crm'] ?></td>
                <td><?= $reg['obs'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size: 1.2rem;
    }
</style>

