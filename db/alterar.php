<div class="title">Alterar Registros</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<?php 
require_once "conexao.php";
$conexao = novaConexao();

if($_GET['codigo']){
    $sql = "SELECT * FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i" , $_GET['codigo']);



    if ($stmt->execute()){
        $resultado = $stmt->get_result();
        if($resultado->num_rows > 0){
            $dados = $resultado->fetch_assoc();    
        }
    }
}

if(count($_POST) > 0) {
    $dados = $_POST; 

    $erros = [];

    // isset($_POST['nome'])
    if(trim($dados['imobiliaria']) === "") {
        $erros['imobiliaria'] = 'Imobiliária obrigatório';
    }
    if(trim($dados['conta_LW']) === "") {
        $erros['conta_LW'] = 'Dado invalido';
    }

  //  if(filter_input(INPUT_POST, "nascimento")) {
 //       $data = DateTime::createFromFormat(
 //           'd/m/Y', $_POST['nascimento']);
 //       if(!$data) {
 //           $erros['nascimento'] = 'Data deve estar no padrão dd/mm/aaaa';
 //       }
 //   }

    //if(!filter_var($_POST['conta_LW'], FILTER_VALIDATE_EMAIL)) {
     //   $erros['conta_LW'] = 'Conta Invalida';
   // }

    if (!filter_var($dados['emails'], FILTER_VALIDATE_INT,
    $emailsConfig) && $dados['emails'] != 0) {
    $erros['emails'] = 'Adicionar qnt email';
    }
    if (!filter_var($dados['crm'], FILTER_VALIDATE_INT,
    $filhosConfig) && $dados['crm'] != 0) {
    $erros['crm'] = 'Adicionar qnt crm';
    }

   /// if (!filter_var($dados['site'], FILTER_VALIDATE_URL)) {
   //     $erros['site'] = 'Site inválido';
  //  }

    $ativo = [
        "options" => ["min_range" => 0, "max_range" => 2]
    ];
    if (!filter_var($dados['ativo'], FILTER_VALIDATE_INT,
        $filhosConfig) && $dados['ativo'] != 0) {
        $erros['ativo'] = 'apenas de 1 a 2.';
    }
    if(!filter_input(INPUT_POST, "obs")) {
        $erros['obs'] = 'Dado de obs';
    }

  //  $salarioConfig = ['options' => ['decimal' => ',']];
   // if (!filter_var($dados['salario'],
   //     FILTER_VALIDATE_FLOAT, $salarioConfig)) {
   //     $erros['salario'] = 'Salário inválido';
    //}
    
    if(!count($erros)) {

        //trocar insert pelo update
        $sql = "UPDATE cadastro
        SET imobiliaria = ?, conta_LW = ?, emails = ?, 
        crm = ?, ativo = ?, obs = ?
        WHERE id = ?";

        $stmt = $conexao->prepare($sql);

        //array dos paramentros pois são muitos 
        $params = [ 
            $dados['imobiliaria'],
            $dados['conta_LW'],
            $dados['emails'],
            $dados['crm'],
            $dados['ativo'],
            $dados['obs']
        ];

        $stmt->bind_param("ssiiis", ...$params);
        //$stmt->execute();

        if ($stmt->execute()){
            unset($dados);
        }
    }
}
?>

<?php foreach($erros as $erro): ?>
    <!-- <div class="alert alert-danger" role="alert"> -->
        <?= "" // $erro ?>
    <!-- </div> -->
<?php endforeach ?>

<form action="/ponto/exercicio.php" method="get">
    <input type="hidden" name="dir" value="db">
    <input type="hidden" name="file" value="alterar">
    <div class="form-group row">
        <div class="col-sm-10">
            <input type="text" name="codigo"
                class="form-control"
                value="<?= $_GET['codigo'] ?>"
                placeholder="informe o código para consulta">
        </div>
        <div class="col-sm-2">
            <button class="btn btn-success mb-4">Consultar</button>
        </div>
    </div>


</form>

<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="imobiliaria">Imobiliaria</label>
            <input type="text" 
                class="form-control <?= $erros['imobiliaria'] ? 'is-invalid' : ''?>"
                id="imobiliaria" name="imobiliaria" placeholder="Imobiliaria"
                value="<?= $dados['imobiliaria'] ?>">
            <div class="invalid-feedback">
                <?= $erros['imobiliaria'] ?>
            </div>
        </div>

        <div class="form-group col-md-8">
            <label for="conta_LW">Conta</label>
            <input type="text" 
                class="form-control <?= $erros['conta_LW'] ? 'is-invalid' : ''?>"
                id="conta_LW" name="conta_LW" placeholder="Conta Locaweb"
                value="<?= $dados['conta_LW'] ?>">
            <div class="invalid-feedback">
                <?= $erros['conta_LW'] ?>
            </div>
        </div>
    </div>
       
 

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="emails">Qtde de Emails</label>
            <input type="number" 
                class="form-control <?= $erros['emails'] ? 'is-invalid' : ''?>"
                id="emails" name="emails"
                placeholder="Qtde de emails"
                value="<?= $dados['emails'] ?>">
            <div class="invalid-feedback">
                <?= $erros['emails'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="crm">Qtde de CRM</label>
            <input type="number" 
                class="form-control <?= $erros['crm'] ? 'is-invalid' : ''?>"
                id="crm" name="crm"
                placeholder="Qtde de CRM"
                value="<?= $dados['crm'] ?>">
            <div class="invalid-feedback">
                <?= $erros['crm'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="ativo">Situação</label>
            <input type="number" 
                class="form-control <?= $erros['ativo'] ? 'is-invalid' : ''?>"
                id="ativo" name="ativo"
                placeholder="Situação"
                value="<?= $dados['ativo'] ?>">
            <div class="invalid-feedback">
                <?= $erros['ativo'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="obs">Observação</label>
            <input type="text" 
                class="form-control <?= $erros['obs'] ? 'is-invalid' : ''?>"
                id="obs" name="obs" placeholder="Observação"
                value="<?= $dados['obs'] ?>">
            <div class="invalid-feedback">
                <?= $erros['obs'] ?>
            </div>
        </div>
    </div>
        
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>