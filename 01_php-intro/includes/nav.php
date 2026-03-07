<!-- includes/nav.php -->
<!--
  Disciplina : Desenvolvimento Web II (DWII)
  Aula       : 03 - PHP Intro
  Autor      : Gabriel Borba de Oliveira
  Data       : 05/03/202
-->
<?php
$cor_inicio = ($pagina_atual === "inicio") ? "color: #f0b341; font-weight: bold;" : "color: white;";
$cor_sobre = ($pagina_atual === "sobre") ? "color: #f0b341; font-weight: bold;" : "color: white;";
$cor_projetos = ($pagina_atual === "projetos") ? "color: #f0b341; font-weight: bold;" : "color: white;";
?>
<nav>
  <a href="index.php"    style="<?php echo $cor_inicio; ?>">Início</a>
  <a href="sobre.php"    style="<?php echo $cor_sobre; ?>">Sobre</a>
  <a href="projetos.php" style="<?php echo $cor_projetos; ?>">Projetos</a>
</nav>