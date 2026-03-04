<?php

require_once '..Model/cors.php';
require_once '..Model/connection.php';
require_once '..Model/contactModel.php';

header('Content-Type: application/json');

$model = new ContactModel($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $model->addOrders($data);
    echo json_encode(['message' => 'Solicitud agendada correctamente']);
}