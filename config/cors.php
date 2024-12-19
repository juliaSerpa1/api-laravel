<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS Configuration
    |--------------------------------------------------------------------------
    |
    | This file is for configuring CORS settings for your application.
    |
    */

    'paths' => ['/*'],  // Defina as rotas de sua API

    'allowed_methods' => ['*'],  // Permite todos os métodos HTTP

    'allowed_origins' => ['http://localhost:3000'],  // URL do seu frontend React

    'allowed_origins_patterns' => [],  // Padrões adicionais, se necessário

    'allowed_headers' => ['*'],  // Permite todos os cabeçalhos HTTP

    'exposed_headers' => [],  // Cabeçalhos que você deseja expor

    'max_age' => 0,  // Tempo máximo que o navegador pode armazenar as respostas CORS

    'supports_credentials' => true,  // Se você deseja permitir cookies e credenciais de login
];
