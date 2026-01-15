<?php
// Indique que la réponse est du JSON
header('Content-Type: application/json');

// Récupérer les données JSON
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['achievement'])) {
    $achievement = htmlspecialchars($data['achievement']);
    // Ici, vous pouvez enregistrer la réalisation dans une base de données

    // Répondre avec un objet JSON
    echo json_encode(['achievement' => $achievement]);
} else {
    http_response_code(400);
    echo json_encode(['error' => 'Donnée manquante']);
}
?>
