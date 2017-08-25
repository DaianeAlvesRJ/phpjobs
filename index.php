<?php


$jobs = array('jobs1'=>[
    'titulo' =>"Desenvolvedor NodeJS Pleno", 
    'descricao' => " Matchbox é uma startup que atua no mercado desenvolvendo tecnologias e soluções inovadoras para a área de Talent Acquisition das empresas. 

Nesta vaga, o profissional irá trabalhar com nossa equipe de desenvolvedores e designers no desenvolvimento de:

- Plataformas gamificadas para engajamento e avaliação de candidatos;

- Chatbots cognitivos que auxiliam candidatos nos processos seletivos;

- Chatbots cognitivos que avaliam perfil e inglês dos candidatos;

- Sistema de gerenciamento de candidatos.",
    'salario' =>"R$3.500,00" ],
'jobs2'=>[
    'titulo' =>"Desenvolvedor Front-end Pleno", 
    'descricao' =>"Matchbox é uma startup que atua no mercado desenvolvendo tecnologias e soluções inovadoras para a área de Talent Acquisition das empresas.

Nesta vaga, o profissional irá trabalhar com nossa equipe de desenvolvedores e designers no desenvolvimento de:

- Plataformas gamificadas para engajamento e avaliação de candidatos;

- Chatbots cognitivos que auxiliam candidatos nos processos seletivos;

- Chatbots cognitivos que avaliam perfil e inglês dos candidatos;

- Sistema de gerenciamento de candidatos.", 
    'salario' =>"R$2.500,00"]);

foreach ($jobs as $valor){
    echo $valor['titulo'] ."<br>";
    echo $valor['descricao'] ."<br>";
    echo $valor['salario'] ."<br>";
}