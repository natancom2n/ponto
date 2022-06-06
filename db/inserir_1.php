<div class="title">Inserir só com php</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro
    (imobiliaria, conta_LW, emails, crm, ativo, obs)
    VALUES (
        'axis21',
        'infocenter', 
        48,
        48,
        0,
        'duplicado'
    )";

    $conexao = novaConexao();
    $resultado = $conexao->query($sql);

    //verificar se deu certo ou erro
if ($resultato){
    echo "Sucesso";
}else{
    echo "Erro: " . $conexao->error;
}

$conexao->close();