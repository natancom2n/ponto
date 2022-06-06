<div class="title">Excluir Registros 2</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<?php 
    require_once "conexao.php";
    $registros = [];
    $conexao = novaConexao();

    //verificar se na url tem a tag informando o id para excluir
    if($_GET['excluir']){
        $excluirSQL = "DELETE FROM cadastro WHERE id = ?";

        //segurança para SQL injection
        $stmt = $conexao->prepare($excluirSQL);
        $stmt->bind_param("i", $_GET['excluir']);
        $stmt->execute();
    }

    $sql = "SELECT * FROM cadastro";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0)
{
    while($row = $resultado->fetch_assoc()){
         $registros[] = $row;
    }
}elseif($conexao->error){
    echo "Erro " . $conexao->error;
}

$conexao->close();
?>

<table class="table table-hover table-bordered">
    <thead>
        <th>ID</th>
        <th>Imobiliaria</th>
        <th>Email</th>
        <th>CRM</th>
        <th>Observações</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $reg): ?>
            <tr>
                <td><?= $reg['id'] ?></td>
                <td><?= $reg['imobiliaria'] ?></td>
                <td><?= $reg['emails'] ?></td>
                <td><?= $reg['crm'] ?></td>
                <td><?= $reg['obs'] ?></td>
                <td>
                    <a href="exercicio.php?dir=db&file=excluir_2&excluir=<?=$reg['id']?>" class="btn btn-danger">
                        Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size: 1.2rem;
    }
</style>