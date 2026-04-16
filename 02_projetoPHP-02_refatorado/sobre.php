<?php
/**
 * ════════════════════════════════════════════════════════════
 * Disciplina : Desenvolvimento Web II (DWII)
 * Projeto    : Portfólio Pessoal — versão refatorada
 * Arquivo    : 02_projetoPHP-02_refatorado/sobre.php
 * Autor      : Gabriel Borba de Oliveira
 * Data       : 15/04/2026
 * Descrição  : Página com informações adicionais, nesse caso um texto sobre mim.
 * ════════════════════════════════════════════════════════════
 */

$nome = "Gabriel Borba de Oliveira";
$formacoes = "Sou aluno do Instituto Federal do Paraná (IFPR) em Ponta Grossa, estou cursando T.I e estou atualmente no 3º ano. Escolhi fazer esse curso de TI e até agora estou gostando, após sair do IF pretendo permancer nessa área de tecnologia e cursar engenharia de softaware na UEPG, entretanto também tenho curisiodades em carreiras diversas, ainda não consegui decidir realmente o que quero. Falando mais a respeito do meu interesse em outras áreas, quando eu tinha 13 anos achava a área de medicina muito interessante, além do fato que eu era bem incentivado pelo meu pai que é enfermeiro. Após um tempo passei a ter interesse em concursos públicos por conta da vida tranquilha e estável que eles prometem, algo que me permitiria ter muita liberdade, ainda mais se fosse um concurso de nível federal. Porém eu sei o quanto de estudo e dedicação que isso demanda e estou disposto a trilhar esse caminho, por mais que ainda não saiba direito a área. Nos concursos tenho grande apreço as áreas policiais devido ao fato de ser um trabalho foda e ter um grande número de vagas por concurso sendo de certa forma mais 'fáceis', também admiro os concursos para perito criminal devido ao fato de ser uma área extensa, envolvendo atuações em cenas de crimes, laborátorios, informática forense, balística forense e as mais diversas áreas que ajudem a solucionar um crime. Todas as ideias me fazem sempre repensar o que quero fazer pelo resto da vida.";
$pagina_atual = "sobre";
$caminho_raiz = "./";
$titulo_pagina = "Sobre - {$nome}";

include __DIR__ . '/includes/cabecalho.php';
?>
<body>

    


    <div class="sobre">
        <h1>👤 Sobre mim</h1>
        <p><?php echo htmlspecialchars($formacoes); ?></p>
        <a href="index.php"> Voltar ao início</a>
    </div> 

    <?php include __DIR__ . '/includes/rodape.php'; ?>

</body>
</html>