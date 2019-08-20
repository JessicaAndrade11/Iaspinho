<?php
/*Local que está rodando o php*/
$hostname='localhost';
/*nome do usuario que tem acesso*/
$username='root';
/*senha do usuario, no nosso caso está em branco*/
$senha='';
/*banco de dados desejado*/
$banco="bdIaspinho";
/*abre uma conexao com o servidor */
$db=mysql_connect($hostname, $username, $senha);
/*selecionar um BD Mysql */
mysql_select_db($banco, $db);
?>