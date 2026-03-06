<!--
  Disciplina : Desenvolvimento Web II (DWII)
  Aula       : 03 - PHP Intro
  Autor      : Gabriel Borba de Oliveira
  Data       : 05/03/202
-->
<?php
$nome = "Gabriel Borba de Oliveira"; 
$pagina_atual = "projetos";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos - <?php echo $nome; ?></title>
</head>
<body>
    <body style="font-family: Arial, sans-serif; margin: 0; background: #f3f4f6;">

    <?php include 'includes/cabecalho.php'; ?>

    <div style="max-width: 800px; margin: 40px auto; padding: 0 20px;">
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