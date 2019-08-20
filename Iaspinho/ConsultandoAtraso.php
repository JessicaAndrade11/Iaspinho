
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

    <title>Controle Iaspinho - Atraso</title>

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
                <li><a href="AlterarAluno.php">Alterar</a></li>
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
        </br>
        

<?php
/*Estabelece a conexao com o BD*/

require("conexao.php");


$DataAtraso = $_POST['DataAtraso'];

    
$sqlselect="SELECT * from tb_atraso WHERE data_atraso = '$DataAtraso'";

$limite = mysql_query($sqlselect);

echo '<h3>'."Atrasos do dia ".date('d-m-Y', strtotime($DataAtraso)).'</h3>';

 ?>
</br>
 
         <table class="table table-striped">
            <thead>
              <tr>
                <th>Código</th>
                <th>RA</th>
                <th>Motivo</th>
                <th>Data</th>
                <th>Horário</th>
              </tr>
            </thead>
            <tbody>
              <?php
while ($sqlselect = mysql_fetch_array($limite)){

  $id_atraso = $sqlselect["id_atraso"];
  $ra = $sqlselect["ra"];
  $motivoAtraso = $sqlselect["motivo_atraso"];
  $dataAtraso = $sqlselect["data_atraso"];
  $horario = $sqlselect["horario"];

   echo   '<tr>';
        echo '<td>'.$id_atraso.'</td>';
        echo '<td>'.$ra.'</td>';
        echo '<td>'.$motivoAtraso.'</td>';
        echo '<td>'.date('d-m-Y', strtotime($DataAtraso)).'</td>';
        echo '<td>'.$horario.'</td>';
         echo'     </tr>'; 

}
?>

  </tbody>
        </table>




      </div>

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
