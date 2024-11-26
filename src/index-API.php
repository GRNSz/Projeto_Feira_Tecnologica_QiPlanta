<?php
if ($_SERVER['REQUEST_URI'] === '/pagamento' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once __DIR__ . '/controllers/pagamentoController.php';
}