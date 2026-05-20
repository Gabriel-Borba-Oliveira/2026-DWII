<?php
/**
 * ════════════════════════════════════════════════════════════
 * Disciplina : Desenvolvimento Web II (DWII)
 * Projeto    : Portfólio Pessoal — versão refatorada
 * Arquivo    : obrigado.php
 * Autor      : Gabriel Borba de Oliveira
 * Data       : 29/05/2026
 * Descrição  : Página de confirmação - destino do redirecionamento PRG
 *              Recebe o nome via GET apenas para exibição amigável.
 *              Nenhum dado de formulário e processado aqui.
 * ════════════════════════════════════════════════════════════
 */
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$nome = "Gabriel Borba de Oliveira";
$pagina_atual = "contato";
$caminho_raiz = "./";
$titulo_pagina = "Mensagem Enviada - Obrigado!";


$nome_visitante = htmlspecialchars($_GET['nome'] ?? 'visitante');
?>

<?php include './includes/cabecalho.php'; ?>

    <div class="container confirmacao">
        <p class="confirmacao-icone">✅</p>
        <h1 class="confirmacao-titulo">
            Obrigado, <?php echo $nome_visitante; ?>!
        </h1>
        <p class="confirmacao-texto">
            Sua mensagem foi recebida. Entrarei em contato em breve.
        </p>
        <a href="contato.php" class="btn"> Enviar outra mensagem</a>
    </div>

<?php include './includes/rodape.php'; ?>