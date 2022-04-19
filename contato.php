<html>
  <head>
    <title>Contato do Site</title>
<!-- Latest compiled and minified CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
  <div class="container mt-3">
    <h1>Currículo</h1>
    <h2><p class="text-info">Preencha os dados</p> </h2>
    <div class="container">
    </div>
    <form action="contato1.php" method="post" >
    <div class="form-floating mb-3 mt-3">        
        <input type="text" class="form-control" id="nome" placeholder="Insira seu nome" name="nome" required>
        <label for="nome">Informe seu nome:</label>
      </div>
      <div class="form-floating mb-3 mt-3">        
        <input type="text" class="form-control" id="email" placeholder="Insira seu email" name="email" required>
        <label for="email">Informe seu e-mail:</label>
      </div>
      <div class="form-floating mb-3 mt-3">        
        <input type="text" class="form-control" id="cep" placeholder="Insira seu CEP" name="cep" required>
        <label for="cep">Informe seu CEP:</label>
      </div>
      
      <div class="form-floating mb-3 mt-3">        
        <input type="text" class="form-control" id="numero" placeholder="Insira seu número" name="numero" required>
        <label for="">Informe seu número de telefone (pode ser do WhatsApp):</label>
        <span class="input-group-text">Exemplo: 49 9 9909999</span>
      </div>    

      <div class="form-floating mb-3 mt-3">        
        <input type="text" class="form-control" id="instituto" placeholder="Insira sua Instituição" name="instituto" required>
        <label for="">Informe sua Instituição:</label>
      </div>    

      <div class="mb-3 mt-3">
      <label for="formacao">Selecione sua formação acadêmica:</label>
      <select class="form-select" name="formacao" id="formacao">
        <option value="1">Ensino Médio Cursando</option>
        <option value="2">Ensino Médio Completo</option>
        <option value="3">Faculdade Graduação Cursando</option>
        <option value="4">Faculdade Graduação Completa</option>
        <option value="5">Doutorado ou Pós Cursando</option>
        <option value="5">Doutorado ou Pós Concluído</option>
      </select>      
      </div>     

      <div class="mb-3 mt-3">
      <label for="area">Selecione sua área de interesse:</label>
      <select class="form-select" name="area" id="area>
        <option value="1">Técnologica</option>
        <option value="2">Comercial</option>
        <option value="3">Administrativa</option>
        <option value="4">Fincanceiro</option>
        <option value="5">Operacional</option>
      </select>      
      </div> 


      <label for="curso">Selecione a cidade da empresa de interesse:</label>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="Chapeco" checked> Chapecó
        <label class="form-check-label" for="radio1"></label>
      </div>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="Xaxim">Xaxim
        <label class="form-check-label" for="radio2"></label>
      </div>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="radio3" name="optradio" value="Pinhalzinho">Pinhalzinho
        <label class="form-check-label" for="radio3"></label>
      </div>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="radio4" name="optradio" value="Guatambu">Guatambu
        <label class="form-check-label" for="radio4"></label>
      </div>

      <br>
      <label for="curso">Selecione seu genero:</label>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="radio5" name="optradio1" value="Feminino" checked> Feminino
        <label class="form-check-label" for="Femino"></label>
      </div>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="radio6" name="optradio1" value="Masculino">Masculino
        <label class="form-check-label" for="Masculino"></label>
      </div>
      <br>
    
      <div class="form-floating">
        <textarea class="form-control" id="infos" name="infos" placeholder="infos"></textarea>
        <label for="infos">Experiências de trabalho e informações complementares: </label>
      </div>
      
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

  </div>
  </body>
</html>