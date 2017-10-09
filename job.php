<?php

 $titulo= $_REQUEST['titulo'];
 $descricao= $_REQUEST['descricao'];
 $requisito= $_REQUEST['requisito'];


 
 $cadastro = array(['titulo' =>'', 
                    'descricao' =>'', 
                    'requisito'=>'',
$tipo = array(['clt'=>'',
                'pj'=>'',
                'freelancer'=>'']),
$salario = array (['tres'=>'',
                    'seis' =>'',
                    'maisdeseis'=>'',
                    'maisdenove'=>'',
                    'porhora'=>,

]),
'email'=>'',
 ]);           

 echo "Título: " .$titulo."<br>";
 echo "Descrição: " .$descricao."<br>";
 echo "Requisitos: " .$requisito."<br>";
 echo "Tipo: " .$tipo."<br>";
 echo "Salario: " .$salario."<br>";
 echo "E-mail: " .$email."<br>";
 
 


?>