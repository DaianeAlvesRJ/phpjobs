<?php 
    include "menu.php";
?>
    <h1>Últimas vagas publicadas:</h1>

<?php
    
    foreach ($jobs as $valor){
        ?><h2> <a href="visuPerfilContratante.html" target="_self"><?php echo $valor['titulo'];?></a></h2></br><?php
                ?><?php echo $valor['descricao'] ."<br>"; echo $valor['salario'] ."<br>"; ?> <?php
    }
       
        
?>
<table>
    <tr>
        <td colspan="2"><p>
            <input name="voltar" type="submit" id="voltar" value="Voltar" onclick="history.go(-1)" target="_self"/>
                
    </tr>
</table>
