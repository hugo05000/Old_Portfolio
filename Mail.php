<?php

/**
 * @author Hugo MARCEAU
 */
class Mail
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

    /**
     * Permet d'envoyer un mail.
     * @return string[] Tableau retourné pour la requête AJAX
     */
    public function send(): array
    {
        if (mail($this->to, $this->nom, $this->message, $this->header)) {
            return ['status' => 'success', 'message' => 'Merci !Votre message a bien été envoyé.'];
        } else {
            return ['status' => 'error', 'message' => 'Désolé. Une erreur est survenue...'];
        }
    }
}