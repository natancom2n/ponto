<div class="titulo">Criar banco de dados</div>

<?php

require_once "conexao.php";

$conexao = novaConexao(null);
//criar novo esquema banco
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php';


//chamar conexao para criar o banco
$resultato = $conexao->query($sql);

//verificar se deu certo ou erro
if ($resultato){
    echo "Sucesso";
}else{
    echo "Erro: " . $conexao->error;
}

$conexao->close();