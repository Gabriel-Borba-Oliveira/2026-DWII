<?php
/**
 * ════════════════════════════════════════════════════════════
 * Disciplina : Desenvolvimento Web II (DWII)
 * Projeto    : Portfólio Pessoal — versão refatorada
 * Arquivo    : includes/conexao.php.php
 * Autor      : Gabriel Borba de Oliveira
 * Data       : 29/05/2026
 * Descrição  : Conectar o banco
 * ════════════════════════════════════════════════════════════
 */
function conectar(): PDO
{

$dsn = 'mysql:host=127.0.01;dbname=portfolio;charset=utf8mb4';
$usuario = 'root';
$senha = 'dwii2026';

try {
    return new PDO($dsn, $usuario, $senha, [

    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
]);
} catch (PDOException $e) {
    die('Erro de conexão com o banco de dados.');
}
}