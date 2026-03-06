<!-- 01_php-intro/sobre.php -->
<?php
$nome = "Gabriel Borba de Oliveira";
$pagina_atual = "sobre";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - <?php echo $nome; ?></title>
</head>
<body>
    <body style="font-family: Arial, sans-serif; margin: 0; background: #f3f4f6;">

    <?php include 'includes/cabecalho.php'; ?>

    <div style="max-width: 800px; margin: 40px auto; padding: 0 20px;">
        <h1 style="color: #3b579d;">👤 Sobre mim</h1>
        <p> Sou aluno do Instituto Federal do Paraná (IFPR) em Ponta Grossa, estou cursando T.I e estou atualmente no 3º ano. Escolhi fazer esse curso e até agora estou gostando, após sair do IF pretendo permancer nessa área de tecnologia e cursar engenharia de softaware na UEPG, entretanto também tenho curisiodades em carreiras diversas, ainda não consegui decidir realmente o que quero.</p>
        <a href="index.php"
            style="color: #3b579d: font-weight: bold;"> Voltar ao início</a>
    </div> 

    <?php include 'includes/rodape.php'; ?>

</body>
</html>