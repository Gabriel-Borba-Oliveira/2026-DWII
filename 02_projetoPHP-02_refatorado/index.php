<?php
/**
 * ════════════════════════════════════════════════════════════
 * Disciplina : Desenvolvimento Web II (DWII)
 * Projeto    : Portfólio Pessoal — versão refatorada
 * Arquivo    : 02_projetoPHP-02_refatorado/index.php
 * Autor      : Gabriel Borba de Oliveira
 * Data       : 15/04/2026
 * Descrição  : Homepage do portfólio é aqui onde vamos guiar o usuário.
 * ════════════════════════════════════════════════════════════
 */
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}




$pagina_atual  = 'inicio';
$caminho_raiz  = './';
$titulo_pagina = 'Portfólio — Gabriel Borba de Oliveira';

// ── 3. Dados de apresentação ─────────────────────────────────

$nome      = 'Gabriel Borba de Oliveira';
$descricao = "Sou aluno do Instituto Federal do Paraná (IFPR) em Ponta Grossa, estou cursando T.I e estou atualmente no 3º ano. Escolhi fazer esse curso e até agora estou gostando, após sair do IF pretendo permancer nessa área de tecnologia e cursar engenharia de softaware na UEPG, entretanto também tenho curisiodades em carreiras diversas, ainda não consegui decidir realmente o que quero.";
$email     = '20241CTB0100026@escola.ifpr.edu.br';
?>

<!DOCTYPE html>

<html lang="pt-BR">
<head>
  <?php

include __DIR__ . '/includes/cabecalho.php';
?>

</head>
<body>

  <main>
    <section class="apresentacao">

  <!-- Foto de perfil -->
  <div class="foto-container">
    <img
      src="<?php echo $caminho_raiz; ?>includes/imgs/Minha_Foto.jpeg"
      alt="Foto de <?php echo htmlspecialchars($nome); ?>"
      class="foto-perfil">
  </div>

  <!-- Bloco de texto + cards informativos -->
  <div class="texto-container">

    <h2>
      Olá, eu sou <?php echo htmlspecialchars($nome); ?>! 👋
    </h2>

    <p><?php echo htmlspecialchars($descricao); ?></p>

    <div class="info-cards">

      <div class="info-card">
        <span class="card-icon">🎓</span>
        <span class="card-texto">Técnico em Informática — IFPR CRPG</span>
      </div>

      <div class="info-card">
        <span class="card-icon">💻</span>
        <span class="card-texto">Desenvolvimento Web II — 2026</span>
      </div>

      <div class="info-card">
        <span class="card-icon">📧</span>
        <span class="card-texto">
          <?php echo htmlspecialchars($email); ?>
        </span>
      </div>

    </div><!-- /info-cards -->

  </div><!-- /texto-container -->

</section>
  </main>

  <?php include __DIR__ . '/includes/rodape.php'; ?>

</body>
</html>