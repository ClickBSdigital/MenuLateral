<?php
// Configuração do menu
$menuLateralConfig = [
    'titulo' => 'Meu Sistema',
    'icone' => '<i class="ri-apps-fill"></i>',
    'collapsed' => false,
    'itens' => [
        ['header' => 'GERAL'],
        [
            'title' => 'Dashboard',
            'icon' => '<i class="ri-dashboard-fill"></i>',
            'link' => '/dashboard'
        ],
        [
            'title' => 'Usuários',
            'icon' => '<i class="ri-user-fill"></i>',
            'link' => '#',
            'submenu' => [
                [
                    'title' => 'Listar Usuários',
                    'link' => '/usuarios'
                ],
                [
                    'title' => 'Adicionar Usuário',
                    'link' => '/usuarios/adicionar'
                ]
            ]
        ],
        // ... mais itens
    ],
    'rodape' => '
        <div class="footer-box">
            <div style="padding: 0 10px">
                <span style="display: block; margin-bottom: 10px">Meu Sistema</span>
                <div>
                    <a href="#">Versão 1.0.0</a>
                </div>
            </div>
        </div>
    '
];

// Incluir o menu
require_once 'caminho/para/menu-lateral/menu-lateral.php';
?>

<!-- Conteúdo principal do seu site -->
<div class="content">
    <h1>Bem-vindo ao sistema</h1>
    <!-- ... -->
</div>