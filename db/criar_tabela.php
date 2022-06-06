<div class="title">Criar Tabelas</div>

<?php

require_once "conexao.php";

//DDL - DATA DEFINITION LANG.
$sql = "CREATE TABLE IF NOT EXISTS cadastro(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    imobiliaria VARCHAR(200) NOT NULL,
    /*incluso DATE,*/
    conta_LW VARCHAR(100) NOT NULL,
    emails INT(100),
    crm INT(100),
    /* Ativo será interi para a cor da linha 1 amarelo , 2 azul e etc*/
    ativo INT(2),
    obs VARCHAR(500)
)";
//não é necessário passar o banco pq o mesmo já foi feito
$conexao = novaConexao();
$resultado = $conexao->query($sql);

//chamar conexao para criar o banco
$resultato = $conexao->query($sql);

//verificar se deu certo ou erro
if ($resultato){
    echo "Sucesso";
}else{
    echo "Erro: " . $conexao->error;
}