
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Controle</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script language="JavaScript">
    JavaScript:window.history.forward(1);
    </script>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="ControleAdm.php">Controle Iaspinho</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="HomeAdm.html">Home</a></li>
            <li><a href="CadastroUsuario.html">Cadastro de Usuário</a></li>
            <li><a href="Login.html">Sair</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
      </br>
    </br>
        <h1>Controle</h1>
        <p class="lead">

        </p>
         <form action="ControleBusca.php" method="post">
        
        <label for="inputRA" class="">RA:</label>
        <input type="number" id="inputRA" name="RA" class="form-control" placeholder="Informe o RA do aluno que deseje ver as ocorrências." required autofocus>
        

      </br>
      
        <button class="btn btn btn-info" type="submit">Pesquisar ocorrências</button>
      </form>

      </div>

<?php
      /*Estabelece a conexao com o BD*/
require("conexao.php");
/*Recebendo o nome e a mensagem digitada no formulario*/

$sqlselect="SELECT * from tb_atraso, tb_aluno where tb_aluno.ra = tb_atraso.ra" ;
$limite = mysql_query($sqlselect);

  echo "<br> ATRASOS<br>";
while ($sqlselect = mysql_fetch_array($limite)){
  
  $id_atraso = $sqlselect["id_atraso"];
  $ra = $sqlselect["ra"];
  $nome = $sqlselect["nome_aluno"];
  $motivoAtraso = $sqlselect["motivo_atraso"];
  $dataAtraso = $sqlselect["data_atraso"];
  $horario = $sqlselect["horario"];


  echo "
        Nome: $nome<br>
        RA: $ra<br>
        Motivo: $motivoAtraso<br>
        Data: $dataAtraso<br>
        Horario: $horario<br>";
          ?>
   
       </br>
       <?php
}

$sqlselectunif="SELECT * from tb_uniforme, tb_aluno where tb_aluno.ra = tb_uniforme.ra" ;
$limite = mysql_query($sqlselectunif);
echo "<br> SEM UNIFORME<br>";
while ($sqlselectunif = mysql_fetch_array($limite)){
  
  $ra = $sqlselectunif["ra"];
  $nome = $sqlselectunif["nome_aluno"];
  $motivoUniformea = $sqlselectunif["motivo_uniforme"];
  $dataUniformea = $sqlselectunif["data_uniforme"];

  echo "
        Nome: $nome<br>
        RA: $ra<br>
        Motivo: $motivoUniformea<br>
        Data: $dataUniformea<br>";
          ?>
   
       </br>
       <?php
}

?>


      <hr>
  <footer class="footer">
  <p> Faculdade Adventista de Hortolandia 2016 </p>
  </footer>


    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
