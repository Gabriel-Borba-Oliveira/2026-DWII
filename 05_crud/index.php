<?php
/**
 * Disciplina: Desenvolvimento Web II (DWII)
 * Aula : 07 - CRUD: Create e Read
 * Arquivo : 05_crud/index.php
 * Autor : Gabriel Borba de Oliveira
 * Data : 03/04/2026
 * Descrição : Lista projetos com busca por nome e filtro por tecnologia (A1)
 */

require_once __DIR__ . '/../04_sessoes/includes/auth.php';
requer_login();

require_once __DIR__ . '/includes/conexao.php';

$pdo = conectar();


$busca = trim($_GET['busca'] ?? '');
$tecnologia = trim($_GET['tecnologia'] ?? '');

$stmtTec = $pdo->query('SELECT tecnologias FROM projetos');
$todasTecs = [];
while ($row = $stmtTec->fetch()) {
    $tecs = explode(',', $row['tecnologias']);
    foreach ($tecs as $tec) {
        $tecTrim = trim($tec);
        if ($tecTrim !== '') {
            $todasTecs[] = $tecTrim;
        }
    }
}
$todasTecs = array_unique($todasTecs);
sort($todasTecs);

$sql = 'SELECT * FROM projetos WHERE 1=1';
$params = [];

if ($busca !== '') {
    $sql .= ' AND nome LIKE :termo';
    $params[':termo'] = '%' . $busca . '%';
}
if ($tecnologia !== '') {
    $sql .= ' AND tecnologias LIKE :tec';
    $params[':tec'] = '%' . $tecnologia . '%';
}
$sql .= ' ORDER BY criado_em DESC';

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$projetos = $stmt->fetchAll();

$cadastroOk = isset($_GET['cadastro']) && $_GET['cadastro'] === 'ok';

$titulo_pagina = 'Meus Projetos - Portfólio';
$caminho_raiz = '../';
$pagina_atual = '';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php require_once __DIR__ . '/../includes/cabecalho.php'; ?>
</head>
<body>
<div class="container">
    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; margin-bottom: 20px;">
        <h1 class="titulo-secao" style="margin: 0;">📁 Meus Projetos</h1>
        <a href="cadastrar.php" class="btn-primario">➕ Novo Projeto</a>
    </div>


    <form method="get" action="index.php" style="margin-bottom: 20px; display: flex; gap: 8px; flex-wrap: wrap; align-items: center;">
        <input type="text" name="busca" placeholder="Buscar por nome..." 
               value="<?php echo htmlspecialchars($busca); ?>" 
               style="padding: 8px; width: 200px; border-radius: 4px; border: 1px solid #ccc;">
        
        <select name="tecnologia" style="padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
            <option value="">Todas as tecnologias</option>
            <?php foreach ($todasTecs as $tec): ?>
                <option value="<?php echo htmlspecialchars($tec); ?>" <?php echo ($tecnologia === $tec) ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($tec); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit" class="btn-primario" style="background: #3b579d;">Filtrar</button>
        <?php if ($busca !== '' || $tecnologia !== ''): ?>
            <a href="index.php" class="btn-secundario">Limpar filtros</a>
        <?php endif; ?>
    </form>

    <?php if ($cadastroOk): ?>
        <div class="alerta-sucesso">
            <p style="margin: 0;">✔ Projeto cadastrado com sucesso!</p>
        </div>
    <?php endif; ?>

    <?php if (empty($projetos)): ?>
        <div class="card" style="text-align: center; padding: 40px 20px; color: #6b7280;">
            <p style="font-size: 40px; margin: 0 0 12px;">🔍</p>
            <p style="font-size: 16px; margin: 0 0 16px;">
                Nenhum projeto encontrado com os filtros aplicados.
            </p>
            <a href="cadastrar.php" class="btn-primario">+ Cadastrar novo projeto</a>
        </div>
    <?php else: ?>
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px;">
            <?php foreach ($projetos as $projeto): ?>
                <div class="card">
                    <h3 style="margin: 0 0 8px; color: #3b579d; font-size: 17px;">
                        <?php echo htmlspecialchars($projeto['nome']); ?>
                    </h3>
                    <p style="margin: 0 0 10px; font-size: 14px; color: #374151; line-height: 1.6;">
                        <?php echo htmlspecialchars($projeto['descricao']); ?>
                    </p>
                    <p style="margin: 0 0 6px; font-size: 13px; color: #6b7280;">
                        ⚒️ <?php echo htmlspecialchars($projeto['tecnologias']); ?>
                    </p>
                    <p style="margin: 0 0 12px; font-size: 13px; color: #6b7280;">
                        📆 <?php echo htmlspecialchars($projeto['ano']); ?>
                    </p>
                    <?php if ($projeto['link_github']): ?>
                        <a href="<?php echo htmlspecialchars($projeto['link_github']); ?>" target="_blank" rel="noopener noreferrer" class="btn-secundario">🔗 Ver no GitHub</a>
                    <?php endif; ?>
                    <a href="detalhe.php?id=<?php echo $projeto['id']; ?>" class="btn-secundario" style="margin-left: 8px;">🔍 Ver detalhes</a>
                </div>
            <?php endforeach; ?>
        </div>
        <p style="margin-top: 16px; font-size: 14px; color: #6b7280; text-align: right;">
            <?php echo count($projetos); ?> projeto(s) encontrado(s)
        </p>
    <?php endif; ?>
</div>
<?php require_once __DIR__ . '/../includes/rodape.php'; ?>
</body>
</html>