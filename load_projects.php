
<?php
$projectDir = 'projects';
$projects = array_filter(scandir($projectDir), function($item) use ($projectDir) {
    return $item !== '.' && $item !== '..' && is_dir("$projectDir/$item");
});
header('Content-Type: application/json');
echo json_encode(array_values($projects));
?>
