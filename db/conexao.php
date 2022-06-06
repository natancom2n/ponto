<?php 
//criar schema banco de dados

function novaConexao($banco = 'curso_php') {
        //será utilzado por padrao o banco curso_php se outro banco não for passado
        $servidor = '127.0.0.1:3306';
        $usuario =  'root';
        $senha = 'root';

        $conexao = new mysqli($servidor, $usuario, $senha, $banco);

        //verificar se a conexao foi feita com sucesso
        if ($conexao->connect_error){
            die('Erro: ' . $conexao->connect_error);

            //também pode ser usado:
            //echo('Erro: ' . $conexao->connect_error);
            //exit();
        }
        return $conexao;
}
