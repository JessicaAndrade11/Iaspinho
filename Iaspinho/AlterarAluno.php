
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

    <title>Controle Iaspinho - Aluno</title>

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
          <a class="navbar-brand" href="Controle.php">Controle Iaspinho</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="Home.html">Home</a></li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Aluno<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="CadastroAluno.html">Cadastrar novo aluno</a></li>
                <li><a href="ConsultarAluno.php">Consultar</a></li>
                <li class="active"><a href="AlterarAluno.php">Alterar</a></li>
                <li><a href="ExcluirAluno.php">Excluir</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Atraso<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="CadastroAtraso.html">Cadastrar</a></li>
                <li><a href="ConsultarAtraso.php">Consultar</a></li>
                <li><a href="AlterarAtraso.php">Alterar</a></li>
                <li><a href="ExcluirAtraso.php">Excluir</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Uniforme<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="CadastroUniforme.html">Cadastrar</a></li>
                <li><a href="ConsultarUniforme.php">Consultar</a></li>
                <li><a href="AlterarUniforme.php">Alterar</a></li>
                <li><a href="ExcluirUniforme.php">Excluir</a></li>
              </ul>
            </li>
            <li><a href="Login.html">Sair</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
      </br>
    </br>
        <h1>Alterar registro de Aluno</h1>
        <p class="lead">

        </p>
         <form action="AlterandoAluno.php" method="post">
        
        <label for="inputRA" class="">RA do aluno que deseja alterar:</label>
        <input type="number" id="inputRA" name="AntigoRA" class="form-control" placeholder="Informe o RA do aluno que deseja alterar." required autofocus>
        
      <hr>
      <h3>Inserir os novos dados</h3>
      <label for="inputNome" class="">Nome:</label>
        <input type="text" id="inputNome" name="NovoNomeAluno" class="form-control" placeholder="Informe o nome do aluno." required autofocus>
        </br>
        <label for="inputRA" class="">RA:</label>
        <input type="number" id="inputRA" name="NovoRA" class="form-control" placeholder="Informe o RA do aluno." required>
      
      </br>
        <button class="btn btn btn-warning" type="submit">Alterar</button>
      </form>

      </div>
</br></br>


<?php
      /*Estabelece a conexao com o BD*/
require("conexao.php");


$sqlselect="SELECT * from tb_aluno" ;
$limite = mysql_query($sqlselect);


?>
      
          <table class="table table-striped">
            <thead>
              <tr>
                <th>RA</th>
                <th>Nome</th>
              </tr>
            </thead>
            <tbody>
              <?php
      

while ($sqlselect = mysql_fetch_array($limite)){
  
  $ra = $sqlselect["ra"];
  $nome = $sqlselect["nome_aluno"];
  
        echo   '<tr>';
        echo '<td>'.$ra.'</td>';
        echo '<td>'.$nome.'</td>';
      
         echo'     </tr>';    
       
}
?>
      </tbody>
        </table>
    

</br>
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
