<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '../Model/cors.php';
require_once '../Model/connection.php';
require_once '../Model/projectModel.php';

header('Content-Type: application/json');

$model = new ProjectModel($conn);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $action = $_GET['action'] ?? null;

    switch ($action) {
        case 'getAllProjects':
            $projects = $model->getAllProjects();
            echo json_encode($projects);
            break;
        case 'getProjectById':
            $id = $_GET['id'] ?? null;
            $project = $model->getProjectById($id);
            echo json_encode($project);
            break;
        case 'getProjectHome':
            $project = $model->getProjectHome();
            echo json_encode($project);
            break;
        default:
            echo json_encode(['message' => 'Acción no válida']);
            break;
    }
}