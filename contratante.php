<?php

 $nome= $_REQUEST['nome'];
 $descricao= $_REQUEST['descricao'];
 $email= $_REQUEST['email'];
 $senha= $_REQUEST['senha'];
 $logo= $_REQUEST['logo'];
 
 $cadastro = array(['nome' =>'', 'descricao' =>'', 'email' =>'','senha' =>'', 'logo' =>'',]);

 echo $nome."<br>";
 echo $descricao."<br>";
 echo $email."<br>";
 echo $senha."<br>";
 echo $logo;

?>