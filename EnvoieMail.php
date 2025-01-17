<?php

class EnvoieMail
{
    private string $header;
    private $to;

    public string $nom;
    public string $message;
    public string $email;

    public function __construct(string $nom, string $message, string $email) {

        $this->nom = $nom;
        $this->message = '<html>
                            <body>
                                <div align="center">
                                    <u>Nom de l\'expéditeur :</u>' . $nom . '<br />
                                    <u>Mail de l\'expéditeur :</u>' . $email . '<br />
                                    <br />
                                    ' . nl2br($message) . '
                                </div>
                            </body>
                         </html>';
        $this->email = $email;
        $this->to = 'contact@hugomarceau.fr';
        $this->header = 'Content-Type:text/html; charset="uft-8"' .
                        "\n" . 'Content-Transfer-Encoding: 8bit';
    }

    public function send() {
        if (mail($this->to, $this->nom, $this->message, $this->header)) {
            return ['status' => 'success', 'message' => 'Merci !Votre message a bien été envoyé.'];
        } else {
            return ['status' => 'error', 'message' => 'Désolé. Une erreur est survenue...'];
        }
    }

    public static function handleAjaxRequest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'] ?? '';
            $message = $_POST['message'] ?? '';
            $email = $_POST['email'] ?? '';

            if (!empty($nom) && !empty($message) && !empty($email)) {
                $mail = new self($nom, $message, $email);
                $response = $mail->send();
            } else {
                $response = ['status' => 'error', 'message' => 'Tous les champs sont obligatoires.'];
            }

            // Renvoyer la réponse JSON
            header('Content-Type: application/json');
            echo json_encode($response);
            exit;
        }

        // Si ce n'est pas une requête POST
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => 'Méthode non autorisée.']);
        exit;
    }
}

// Appeler la méthode pour gérer la requête AJAX
EnvoieMail::handleAjaxRequest();