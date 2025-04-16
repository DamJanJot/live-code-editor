<?php
$data = json_decode(file_get_contents('php://input'), true);

if (!$data || !isset($data['name'])) {
    http_response_code(400);
    echo "Błąd: Nie podano nazwy projektu.";
    exit;
}

$projectDir = 'projects/' . basename($data['name']);
if (!is_dir($projectDir)) {
    mkdir($projectDir, 0777, true);
}

file_put_contents("$projectDir/index.html", $data['html']);
file_put_contents("$projectDir/style.css", $data['css']);
file_put_contents("$projectDir/script.js", $data['js']);

echo "Projekt został zapisany pomyślnie.";