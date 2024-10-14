<?php
    // Verifica si el script está siendo accedido directamente
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // Redirige a index.html si se intenta acceder directamente
        header('Location: index.html');
        exit(); // Detiene la ejecución del script
    }

    // Continúa con el código si no es acceso directo
    header('Content-Type: application/json');
    $botToken = '7801786395:AAFcOkQcB3RKgJZGA_qYVjOQknd_haW_lbE';
    $chatId = '5391753542';
    echo json_encode(['botToken' => $botToken, 'chatId' => $chatId]);
?>
