<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$empresa = $_POST['optradio'];
$cep = $_POST['cep'];
$genero = $_POST['optradio1'];
$insituto = $_POST['instituto'];
$area = $_POST['area'];
$formacao = $_POST['formacao'];
$numero = $_POST['numero'];


if($empresa=="option1") {
    $empresa = "Chapecó";
}else if($empresa=="option2") {
    $empresa = "Xaxim"; 
} else if($empresa=="option3"){ 
    $empresa = "Pinhalzinho"; 
  } else if($empresa=="option4"){ 
    $empresa = "Guatambu"; 
}else {
    $empresa = "Outra cidade fora do Pais";
}

if($genero=="Feminino") {
  $genero = "Feminino";
}else if($genero=="Masculino") {
  $genero = "Masculino"; 
}else {
  $genero = "Não quero informar";
}

$empresa = $_POST['optradio'];
$genero = $_POST['optradio1'];
//if para o curso
$infos = $_POST['infos']; //informações
?>
<html>
  <head>
    <title>Contato do Site</title>
<!-- Latest compiled and minified CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <h1>Suas Informações do Currículo</h1>
    <div class="container">

    <form  >
          <div class="toast show">
        <div class="toast-header">
          Muito bom!!!
          <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
        </div>
        <div class="toast-body">
          Seu currículo foi enviado com sucesso! :) 
        </div>
      </div>
      <div class="form-floating mb-3 mt-3">        
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>" disabled>
        <label for="nome">Nome:</label>
      </div>      
      <div class="form-floating mb-3 mt-3">        
        <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" disabled>
        <label for="email">Email:</label>
      </div>
      <div class="form-floating mb-3 mt-3">        
        <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $cep; ?>" disabled>
        <label for="cep">CEP:</label>
      </div>
      <div class="form-floating mb-3 mt-3">        
        <input type="text" class="form-control" id="formacao" name="formacao" value="<?php echo $formacao; ?>" disabled>
        <label for="formacao">Formação:</label>
      </div>     
      <form  >
      <div class="form-floating mb-3 mt-3">        
        <input type="text" class="form-control" id="numero" name="numero" value="<?php echo $numero; ?>" disabled>
        <label for="numero">Número:</label>
      </div>      
      <div class="form-floating mb-3 mt-3">        
        <input type="text" class="form-control" id="empresa" name="empresa" value="<?php echo $empresa; ?>" disabled>
        <label for="empresa">Empresa:</label>
      </div>
      <div class="form-floating mb-3 mt-3">        
        <input type="text" class="form-control" id="area" name="area" value="<?php echo $area; ?>" disabled>
        <label for="area">Area:</label>
      </div>     
      <div class="form-floating mb-3 mt-3">        
        <input type="text" class="form-control" id="instituto" name="instituto" value="<?php echo $insituto; ?>" disabled>
        <label for="instituto">Intituto:</label>
      </div>     
      <div class="form-floating mb-3 mt-3">        
        <input type="text" class="form-control" id="genero" name="genero" value="<?php echo $genero; ?>" disabled>
        <label for="genero">Genero:</label>
      </div>     
      <br>
      <div class="form-floating">
        <textarea class="form-control" id="infos" name="infos" disabled><?php echo $infos; ?></textarea>
        <label for="infos">Informações</label>
      </div>
      
    </form>
    <a href="contato.php" class="btn btn-success">< voltar</a>
  </div>
  </body>
</html>