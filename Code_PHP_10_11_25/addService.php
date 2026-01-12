<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newService = trim($_POST['service'] ?? '');

    if ($newService !== '') {
        echo htmlentities($newService);
    } else {
        http_response_code(400);
        echo "Service invalide.";
    }
}
?>
