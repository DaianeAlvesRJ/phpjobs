<?php
    require"data.php";
 
?>
<!doctype html>
<html lang = "pt-br">
<head>
	<meta charset = "utf-8" />
	<meta content = "width = device-width, initial-scale = 1, escala máxima = 1" name = "viewport">
	<title>Visualizar Job Job</title>
	<link href = "css.css" rel = "stylesheet" />
</head>
<body>
<?php 
       include "menu.php";
?>
<?php
    
    $valor=$jobs[$_GET['id']]
        ?><?php echo $valor['titulo'];?></br><?php
        ?><?php echo $valor['descricao'] ."<br>"; 
                echo $valor['salario'] ."<br>"; 
        ?> <?php
        
       
   
    
?>
        
        <tr>
            <td colspan="2"><p>
            <input name="voltar" type="submit" id="voltar" value="Voltar" onclick="history.go(-1)" target="_self"/>
                
        </tr>
        
   




</body>
</html>