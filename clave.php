<?php
    header('Content-Type: application/json');
    $botToken = '6581443251:AAELPlQyJtJzs8AdiNaEKNPMxKPy4v1AFmM';
    $chatId = '6396229862';
    echo json_encode(['botToken' => $botToken, 'chatId' => $chatId]);
?>
