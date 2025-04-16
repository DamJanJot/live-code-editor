
<?php
$name = $_GET['name'] ?? '';

if (!$name || !is_dir("projects/$name")) {
    http_response_code(404);
    echo json_encode(["error" => "Projekt nie istnieje."]);
    exit;
}

$response = [
    'html' => file_get_contents("projects/$name/index.html"),
    'css' => file_get_contents("projects/$name/style.css"),
    'js' => file_get_contents("projects/$name/script.js")
];

header('Content-Type: application/json');
echo json_encode($response);
?>
