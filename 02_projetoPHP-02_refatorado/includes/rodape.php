<?php
/**
 * ════════════════════════════════════════════════════════════
 * Disciplina : Desenvolvimento Web II (DWII)
 * Projeto    : Portfólio Pessoal — versão refatorada
 * Arquivo    : includes/rodape.php
 * Autor      : Gabriel Borba de Oliveira
 * Data       : 13/04/2026
 * Descrição  : Rodapé global do projeto.
 *              Exibe o nome do autor e o ano atual (gerado
 *              dinamicamente por date()). Se $nome não estiver
 *              definida na página, usa 'Portfólio' como fallback.
 * ════════════════════════════════════════════════════════════
 */

// Fallback: se $nome não estiver definida na página, exibe "Portfólio".
// Isso evita avisos de PHP quando o rodapé é incluído sem $nome.
$autor = isset($nome) ? htmlspecialchars($nome) : 'Portfólio'; // O que é o isset = função que verifica se tem algo dentro da variavel
?>

<!-- <footer> sem style inline: visual controlado pelo style.css --> 
<footer>
  <?php echo $autor; ?>
  &copy; <?php echo date('Y'); ?>
  | Desenvolvido com PHP 
  | IFPR - Ponta Grossa 
</footer>