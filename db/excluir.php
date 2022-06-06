<div class="title">Excluir dados banco</div>

<?php

require_once "conexao.php";
$sql = "DELETE FROM cadastro WHERE id = 3";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado){
    echo "Exclusão realizada";
}else{
    echo "Esso ao excluir " . $conexao->error;
}

$conexao->close();