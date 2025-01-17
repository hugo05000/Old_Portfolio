<?php
require_once 'Mail.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'] ?? '';
    $message = $_POST['message'] ?? '';
    $email = $_POST['email'] ?? '';

    if (!empty($nom) && !empty($message) && !empty($email)) {
        $mail = new Mail($nom, $message, $email);
        $response = $mail->send();
    } else {
        $response = ['status' => 'error', 'message' => 'Tous les champs sont obligatoires.'];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

// Si la requête n'est pas de type POST
header('Content-Type: application/json');
echo json_encode(['status' => 'error', 'message' => 'Méthode non autorisée.']);
exit;