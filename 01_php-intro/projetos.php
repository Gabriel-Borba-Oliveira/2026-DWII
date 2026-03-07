<!-- 01_php-intro/projetos.php -->
<!--
  Disciplina : Desenvolvimento Web II (DWII)
  Aula       : 03 - PHP Intro
  Autor      : Gabriel Borba de Oliveira
  Data       : 05/03/202
-->
<?php
$nome = "Gabriel Borba de Oliveira"; 
$pagina_atual = "projetos";
include 'includes/nav.php'
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos - <?php echo $nome; ?></title>
    <style>
        nav { background: #3b579d; padding: 15px 30px; }
        nav a { color: white; text-decoration: none; margin-right: 20px; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        body {font-family: Arial, sans-serif; margin: 0; background: #f3f4f6;}
        .projetos {
            max-width: 800px;
            margin: 40px auto;
            padding: 0 20px;
            border: 1px solid #e8e8e8;
            border-radius: 15px;
            background-color: #e8e8e8;
            padding-bottom: 20px
        }
    </style>
</head>
<body>


    <div class="projetos">
        <h1 style="color: #3b579d;">Projetos</h1>
        <h2>Jogo da Velha em Python</h2>
        <p>Projeto criado no 1º ano na matéria de lógica de programação.</p>

        <h2>Portfólio de Apresentação</h2>
        <p>Primeiro projeto criado em DWII usando HTML e CSS.</p>

        <h2>Site de Clima - Gostaria de fazer futuramente</h2>
        <p>Esse projeto pegaria os dados de uma API pública para exibir os dados do clima de determinada cidade.</p>
        <a href="index.php"
            style="color: #3b579d: font-weight: bold;"> Voltar ao início</a>
    </div> 

    <?php include 'includes/rodape.php'; ?>

</body>
</html>