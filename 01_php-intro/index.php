<!-- 01_php-intro/index.php -->
<!--
  Disciplina : Desenvolvimento Web II (DWII)
  Aula       : 03 - PHP Intro
  Autor      : Gabriel Borba de Oliveira
  Data       : 05/03/202
-->
<?php
// Variáveis PHP - serão usadas no HTML abaixo
$nome = "Gabriel Borba de Oliveira";
$profissao = "Técnico em Informática em formação";
$curso = "Técnico em Informática - IFPR";
$pagina_atual = "inicio";
include 'includes/nav.php'
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio - <?php echo $nome; ?></title>
    <style>
            


        body { font-family: Arial, sans-serif; margin: 0; background: #f3f4f6;}
        nav { background: #3b579d; padding: 15px 30px; }
        nav a { color: white; text-decoration: none; margin-right: 20px; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        
        .hero { background: linear-gradient(135deg, #3b579d, #2a4080); 
        color: white; 
        text-align: center; 
        padding: 60px 20px; 
    }
        
        .hero h1 { font-size: 2.5em; margin-bottom: 10px; }
        .hero p { font-size: 1.2em; opacity: 0.9; }
        .container { max-width: 800px;
                    margin: 40px auto;
                    padding: 0 20px;
                    border: 1px solid #e8e8e8;
                    border-radius: 15px;
                    background-color: #e8e8e8
                }
        footer { background: #010000; color: #6b7280; text-align: center; padding: 20px; margin-top: 60px; font-size: 14px; }
        .msg {
            max-width: 800px;
            margin: 40px auto;
            padding: 0 20px;
            border: 1px solid #e8e8e8;
            border-radius: 15px;
            background-color: #e8e8e8
        }

        .link {
            max-width: 800px;
            margin: 40px auto;
            padding: 0 20px;
            border: 1px solid #e8e8e8;
            border-radius: 15px;
            background-color: #e8e8e8;
            padding-bottom: 20px
        }
    </style>
</head>
<body>
    

    <div class="hero">
        <h1><?php echo $nome; ?></h1>
        <p><?php echo $profissao; ?> | <?php echo $curso; ?></p>
    </div>

    <div class="container">
        <h2>Bem-vindo ao meu portfólio</h2>
        <p>Esta página foi gerada pelo PHP em:
            <strong><?php echo date("d/m/Y \à\s H:i:s"); ?></strong></p>
    </div>

    <div class="msg">
        <h2>Sobre este site</h2>
        <p>Técnico em Informática em formação, provavelmente futuro aluno da UEPG em engenharia de software. E com diversos interesses em outras áreas.</p>
    </div>

    <div class=link>
        <h2>Explore mais</h2>
        <a href="sobre.php">→ Sobre mim</a> <a href="projetos.php">   → Meus Projetos</a>
    </div>

    <?php include 'includes/rodape.php'; ?>
</body>
</html>