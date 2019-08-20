
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


$RAAtraso = $_POST['RAAtraso'];
$MotivoAtraso = $_POST['MotivoAtraso'];
$DataAtraso = $_POST['DataAtraso'];
$HorarioAtraso = $_POST['HorarioAtraso'];


$sqlinsert="INSERT INTO tb_atraso(id_atraso, ra, motivo_atraso, data_atraso, horario) VALUES('', '$RAAtraso', '$MotivoAtraso', '$DataAtraso', '$HorarioAtraso')";


/* Realiza uma query MySQL em caso de erro exibe a mensagem*/
mysql_query($sqlinsert) or die ("Não foi possível inserir");

echo " </br><p class=\"lead\">Atraso cadastrado com sucesso!</p> ";

$sqlaviso=mysql_query("SELECT count(id_atraso) as atrasos from tb_atraso where ra ='".mysql_real_escape_string($RAAtraso)."'");
$data=mysql_fetch_assoc($sqlaviso);
//echo $data['uniformes'];

if(($data['atrasos'] % 3) == 0){
  
  ?>
      <div class="alert alert-danger" role="alert">
        <strong>3 ATRASOS!!!</strong> Favor entrar em contato com os responsáveis do aluno.
      </div>
<?php


$sqlselect="SELECT * from tb_atraso where ra ='".mysql_real_escape_string($RAAtraso)."' ORDER BY data_atraso DESC";
$sqlselecta="SELECT * from tb_aluno where ra ='".mysql_real_escape_string($RAAtraso)."'";

$limite = mysql_query($sqlselect);
$limitea = mysql_query($sqlselecta);
?>

  <h4>ALUNO</h4>
         <table class="table table-striped">
            <thead>
              <tr>
                <th>RA</th>
                <th>Nome</th>
              </tr>
            </thead>
            <tbody>
              <?php
while ($sqlselecta = mysql_fetch_array($limitea)) {
  $ra = $sqlselecta["ra"];
  $nome = $sqlselecta["nome_aluno"];

        echo   '<tr>';
        echo '<td>'.$ra.'</td>';
        echo '<td>'.$nome.'</td>';
        echo'     </tr>'; 
}
?>

  </tbody>
        </table>
      </br>
  <h4>ATRASOS</h4>
         <table class="table table-striped">
            <thead>
              <tr>
                <th>Motivo</th>
                <th>Data</th>
                <th>Horário</th>
              </tr>
            </thead>
            <tbody>
              <?php
$i = 1;
while ($i <= 3){

   $sqlselect = mysql_fetch_array($limite);
  $motivoAtraso = $sqlselect["motivo_atraso"];
  $dataAtraso = $sqlselect["data_atraso"];
  $horarioAtraso = $sqlselect["horario"];
  
        echo   '<tr>';
        echo '<td>'.$motivoAtraso.'</td>';
        echo '<td>'.date('d-m-Y', strtotime($dataAtraso)).'</td>';
        echo '<td>'.$horarioAtraso.'</td>';
        echo'     </tr>'; 
        $i++;
}

?>

  </tbody>
        </table>
     <?php
   }
   ?>

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
