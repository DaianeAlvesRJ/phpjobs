<?php

 $nome= $_REQUEST['nome'];
 $descricao= $_REQUEST['descricao'];
 $email= $_REQUEST['email'];
 $senha= $_REQUEST['senha'];
 $logo= $_REQUEST['logo'];
 
 $cadastro = array(['nome' =>'', 'descricao' =>'', 'email' =>'','senha' =>'', 'logo' =>'',]);

 echo "Nome: " .$nome."<br>";
 echo "Descrição: " .$descricao."<br>";
 echo "E-mail: " . $email."<br>";
 echo "Senha: " .$senha."<br>";
 echo "Logo: " .$logo;

?>