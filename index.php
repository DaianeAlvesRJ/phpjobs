<!doctype html>
<html lang = "pt-br">
<head>
  <meta charset = "utf-8" />
  <meta content = "width = device-width, initial-scale = 1, escala máxima = 1" name = "viewport">
  <title>PHP Jobs</title>
  <link href = "css.css" rel = "stylesheet" />
</head>
<body>
   
    <div id ="menu">
        <ul>
            <li><a href="cadcontratante.php" target="_self"> Cadastro do Contratante </a></li>
            <li><a href="cadjobs.php" target="_self"> Cadastro do JOB </a></li>
            <li><a href="visualizarJob.php" target="_self"> Visualizar Job </a></li>
            <li><a href="visuPerfilContratante.php" target="_self"> Visualizar Perfil do Contratante </a></li>
            <li><a href="login.php" target="_self">Login/Logout </a></li>
        </ul>
    </div>
    <h1>Últimas vagas publicadas:</h1>

<?php
    $jobs = array([
        'titulo' =>"Desenvolvedor NodeJS Pleno", 
        'descricao' => " Matchbox é uma startup que atua no mercado desenvolvendo tecnologias e soluções inovadoras para a área de Talent Acquisition das empresas. </br>
    
    Nesta vaga, o profissional irá trabalhar com nossa equipe de desenvolvedores e designers no desenvolvimento de:</br>
    <ul>
        <li>Plataformas gamificadas para engajamento e avaliação de candidatos;
    
        <li>Chatbots cognitivos que auxiliam candidatos nos processos seletivos;
    
        <li>Chatbots cognitivos que avaliam perfil e inglês dos candidatos;
    
    <li>    Sistema de gerenciamento de candidatos.</ul>",
        'salario' =>"Salário: R$3.500,00 </br>" ],
    [
        'titulo' =>"Desenvolvedor Front-end Pleno", 
        'descricao' =>"Matchbox é uma startup que atua no mercado desenvolvendo tecnologias e soluções inovadoras para a área de Talent Acquisition das empresas.</br>
    
    Nesta vaga, o profissional irá trabalhar com nossa equipe de desenvolvedores e designers no desenvolvimento de:
    <ul>
        <li>Plataformas gamificadas para engajamento e avaliação de candidatos;
    
        <li>Chatbots cognitivos que auxiliam candidatos nos processos seletivos;
    
        <li>Chatbots cognitivos que avaliam perfil e inglês dos candidatos;
    
        <li>Sistema de gerenciamento de candidatos.</ul>", 
        'salario' =>"Salário: R$2.500,00"]);
    
    foreach ($jobs as $valor){
        ?><h2> <a href="visuPerfilContratante.html" target="_self"><?php echo $valor['titulo'];?></a></h2></br><?php
        ?><?php echo $valor['descricao'] ."<br>"; echo $valor['salario'] ."<br>"; ?> <?php
            
       
   
    }
?>

</body>
</html>