<?php

require_once '..Model/cors.php';
require_once '..Model/connection.php';
require_once '..Model/newsModel.php';

header('Content-Type: application/json');

$model = new NewsModel($conn);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $action = $_GET['action'] ?? null;

    switch ($action) {
        case 'getAllNews':
            $news = $model->getAllNews();
            echo json_encode($news);
            break;
        case 'getNewsById':
            $id = $_GET['id'] ?? null;
            $news = $model->getNewsById($id);
            echo json_encode($news);
            break;
        default:
            echo json_encode(['message' => 'Acción no válida']);
            break;
    }
}