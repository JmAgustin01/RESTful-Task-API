<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST");

$method = $_SERVER['REQUEST_METHOD'];

$mockTasks = [
    ["id" => 1, "task" => "Design Database Schema", "status" => "Completed"],
    ["id" => 2, "task" => "Create API Endpoints", "status" => "In Progress"],
    ["id" => 3, "task" => "Connect Frontend to API", "status" => "Pending"]
];

if ($method === 'GET') {
    http_response_code(200);
    echo json_encode(["message" => "Tasks retrieved successfully.", "data" => $mockTasks]);
} elseif ($method === 'POST') {
    $input = json_decode(file_get_contents("php://input"), true);
    if (!empty($input['task'])) {
        http_response_code(201);
        echo json_encode([
            "message" => "New task successfully created.",
            "received_data" => ["id" => rand(4, 100), "task" => htmlspecialchars($input['task']), "status" => "Pending"]
        ]);
    } else {
        http_response_code(400);
        echo json_encode(["error" => "Task description is required."]);
    }
} else {
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed. Use GET or POST."]);
}
?>