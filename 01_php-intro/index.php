<!-- 01_php-intro/index.php -->
<!--
    Disciplina : Desenvolvimento Web II (DWII)
    Aula       : 03 - Arquitetura Web e Introdução ao PHP
    Autor      : Gabriel Borba de Oliveira
    Data:      : 02/03/2026
    Repositório: https://github.com/Gabriel-Borba-Oliveira/2026-DWII
-->
<?php
// Variáveis PHP - serão usadas no HTML abaixo
$nome = "Gabriel Borba de Oliveira";
$curso = "Técnico em Informática - IFPR";
$ano = "2026";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio - <?php echo $nome; ?></title>
</head>
<body>
    <h1>Olá, meu nome é <?php echo $nome; ?></h1>
    <p>Curso: <?php echo $curso; ?></p>
    <p>Ano: <?php echo $ano; ?></p>
    <p>Página gerada em: <?php echo date("d/m/Y \à\s H:i"); ?></p>
</body>
</html>