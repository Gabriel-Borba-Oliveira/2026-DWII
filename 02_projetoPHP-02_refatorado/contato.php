<?php
/**
 * ════════════════════════════════════════════════════════════
 * Disciplina : Desenvolvimento Web II (DWII)
 * Projeto    : Portfólio Pessoal — versão refatorada
 * Arquivo    : contato.php (migrado de 02_formularios/contato.php)
 * Autor      : Gabriel Borba de Oliveira
 * Data       : 29/04/2026
 * Descrição  : PRG - Post/Redirect/Get
 * ════════════════════════════════════════════════════════════
 */

// --- VARIÁVEIS DO TEMPLATE ---
// Definidas ANTES do include - cabecalho.php as usa para
// montar o <title>, o <link> do CSS e o item ativo no menu.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$nome = "Gabriel Borba de Oliveira";
$pagina_atual = "contato";
$caminho_raiz = "./";
$titulo_pagina = "Contato";


$nome_visitante = '';
$email = '';
$assunto = '';
$mensagem = '';
$erros = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome_visitante = trim($_POST['nome_visitante'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $assunto = $_POST['assunto'] ?? '';
    $mensagem = trim($_POST['mensagem'] ?? '');

    if (empty($nome_visitante)) {
        $erros[] = 'O campo Nome é obrigatório.';
}

    if (empty($email)) {
        $erros[] = 'O campo E-mail é obrigatório.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = 'Informe um e-mail válido';
    }
    if (empty($mensagem)) {
        $erros[] = 'O campo Mensagem é obrigatório.';
    } elseif (strlen($mensagem) < 10) {
        $erros[] = 'A mensagem deve ter pelo menos 10 caracteres.';
    } elseif (strlen($mensagem) > 500) {
        $erros[] = 'A mensagem não pode ultrapassar 500 caracteres.';
    }

    if (empty($erros) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        header('Location: obrigado.php?nome=' . urlencode($nome_visitante));
        exit;
    }
}

// --- RECEBER DADOS DO FORMULÁRIO ---
// $_GET é um array superglobal - PHP preenche automaticamente
// com os parâmetros da URL (ex: primeira visita, sem envio)
//
// ?? '' é o operador null coalescing
//  retorna o valor de $_GET['chave'] se existir,
//  ou '' se a chave não existir (ex: primeira visita, sem envio)
$nome_visitante = $_POST['nome_visitante'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';

include './includes/cabecalho.php';
?>
<!--
    cabecalho.php gera tudo até <body> - incluindo:
        <!DOCKTYPE html>, <html>, <head>, <link rel="stylesheet"
        href="../includes/style.css">, </head>, <body>, <header>, <nav>
    Por isso não repetimos essas tags aqui.
-->


    <div class="container">
        <h1 class="titulo-secao">📮 Formulário de Contato</h1>


        <!--
            action="contato.php" - envia para a própria página (auto-submit)
            method="get" - dados vão na URL; vamos observar isso
            Sem CSS inline: todo o visual vem do style.css via cabecalho.php
        -->
        <form class="form-container" action="contato.php" method="POST">


            <label>Seu nome:</label>
            <input type="text" name="nome_visitante" value="<?php echo htmlspecialchars($nome_visitante); ?>">

            <label>Seu e-mail:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>">

            <label>Sua mensagem:</label>
            <textarea name="mensagem" rows="4"><?php echo htmlspecialchars($mensagem); ?></textarea>


            <button type="submit">Enviar</button>

        </form>
    

<?php if (!empty($erros)): ?>
    <div class="alerta-erro">
        <h3>Corrija os erros:</h3>
        <?php foreach ($erros as $erro): ?>
            <p class="erro-item">❌ <?php echo htmlspecialchars($erro); ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
    </div>

<?php include './includes/rodape.php'; ?>