# Portfólio Dinâmico — Refatorado

Mini-site de portfólio pessoal desenvolvido em PHP puro, com autenticação, CRUD de projetos e 
catálogo de tecnologias. Código reorganizado em subpastas para melhor manutenção.

## Sobre o projeto

Este projeto é o resultado das aulas de Desenvolvimento Web II. Ele apresenta um portfólio com informações do autor, listagem de projetos, catálogo de tecnologias, formulário de contato, e uma área administrativa com login onde é possível gerenciar projetos com um crud completo. O código foi refatorado para usar includes centralizados, caminhos absolutos com __DIR__ e variáveis de controle de navegação.

## Como executar

```
cd ~/workspaces/2026-DWII/02_projetoPHP-02_reafatorado/index.php
php -S localhost:8080
```

## Estrutura de arquivos

- 02_projetoPHP-02_refatorado/
    - 00_apresentacao
        - imgs
            - Minha_Foto.jpeg
        - index.html
        - style.css      
    - 01_php-intro
        - index.php
        - projetos.php
        - sobre.php
        - README.md  
    - 02_formularios
        - contato.php
        - obrigado.php
        - README.md   
    - 03_pdo
        - includes
            - cab_pdo.php
            - conexao.php
            - rod_pdo.php
        - sql
            - setup.sql
        - 404.php
        - detalhe.php
        - index.php
    - 04_sessoes
        - includes
            - auth.php
        - login.php
        - logout.php
        - painel.php
        - perfil.php
        - publico.php
    - 05_crud
        - includes
            - conexao.php
        - sql
            - setup.sql
        - cadastrar.php
        - detalhe.php
        - editar.php
        - excluir.php
        - index.php
    - includes
        - cabecalho.php
        - nav.php
        - rodape.php
        - style.css
    - index.php
    - sobre.php       

## Decisões de refatoração

1. **Sessão não iniciada em todas as páginas** -> movemos session_start() para includes/cabecalho.php. Todas as páginas que incluem o cabeçalho passam a reconhecer o login automaticamente.

2. **Nav com condicional** -> colocamos uma condicional no nav para caso o usuário já esteja logado não apareça a duplicata da página login novamente, assim o painel aparece direto junto com a opção de sair.

3. **index.php com centralização de dados em variaveis** -> Os dados de apresentação como email, descrição e nome foram colocados em variaveis para garantir uma boa manutenção no futuro.

4. **Css unificado** -> Agora todo o css esta unificado em includes/style.css para ter uma melhor manutenção além de prover menos repetição de código.

## Autor

Gabriel Borba de Oliveira
Curso: Técnico em Informática - IFPR
Disciplina: Desenvolvimento Web II
Ano: 2026