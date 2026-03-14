<?php
/**
 * 
 * ARQUIVO : 02_formularios/contato.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula : 04 - PHP para Web: Formulários, GET e POST
 * Autor : Gabriel Borba de Oliveira
 * Conceitos : formulários HTML, method GET, $_GET, htmlspecialchars()
 * 
 * 
 * Página de contato - primeira versão com GET
 * cabecalho.php gera o <head> completo (incluindo o <link>
 * para style.css) e o <body> até o <main>. 
 */

// --- VARIÁVEIS DO TEMPLATE ---
// Definidas ANTES do include - cabecalho.php as usa para
// montar o <title>, o <link> do CSS e o item ativo no menu.
$nome = "Gabriel Borba de Oliveira";
$pagina_atual = "contato";
$caminho_raiz = "../";
$titulo_pagina = "Contato";


$nome_visitante = '';
$mensagem = '';
$erros = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome_visitante = trim($_POST['nome_visitante'] ?? '');
    $mensagem = trim($_POST['mensagem'] ?? '');

    if (empty($nome_visitante)) {
        $erros[] = 'O campo Nome é obrigatório.';
}
    if (empty($mensagem)) {
        $erros[] = 'O campo Mensagem é obrigatório.';
    } elseif (strlen($mensagem) < 10) {
        $erros[] = 'A mensagem deve ter pelo menos 10 caracteres.';
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
?>
<!--
    cabecalho.php gera tudo até <body> - incluindo:
        <!DOCKTYPE html>, <html>, <head>, <link rel="stylesheet"
        href="../includes/style.css">, </head>, <body>, <header>, <nav>
    Por isso não repetimos essas tags aqui.
-->
<?php include '../includes/cabecalho.php'; ?>

    <div class="container">
        <h1 class="titulo-secao">📮 Formulário de Contato</h1>


        <!--
            action="contato.php" - envia para a própria página (auto-submit)
            method="get" - dados vão na URL; vamos observar isso
            Sem CSS inline: todo o visual vem do style.css via cabecalho.php
        -->
        <form class="form-container" action="contato.php" method="POST">


            <label>Seu nome:</label>
            <input type="text" name="nome_visitante">


            <label>Sua mensagem:</label>
            <textarea name="mensagem" rows="4"></textarea>


            <button type="submit">Enviar</button>

        </form>
    </div>

<?php if (!empty($erros)): ?>
    <div class="alerta-erro">
        <h3>Corrija os erros:</h3>
        <?php foreach ($erros as $erro): ?>
            <p style="margin: 4px 0;">❌ <?php echo htmlspecialchars($erro); ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php include '../includes/rodape.php'; ?>