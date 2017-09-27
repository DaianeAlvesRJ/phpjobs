<?php 
    include "menu.php";
?>
    <h1>Últimas vagas publicadas:</h1>

<?php
    
    foreach ($jobs as $key => $valor){
        ?><p> <a href="visualizarJob.php?id=<?php echo $key;?>" target="_self"><?php echo $valor['titulo'];?></a></p></br> <?php
        
       
   
    }
?>

</body>
</html>