<?php
// Charger Composer
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Paramètres du serveur SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mehmedbamba098@gmail.com'; // Remplace par ton email
    $mail->Password = 'aoezbbskpwyetcfm'; // Mot de passe de l'application généré par Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Destinataire et expéditeur
    $mail->setFrom('mehmedbamba098@gmail.com', 'mehmed Bamba');
    $mail->addAddress('bambakaneisidk@groupeisi.com'); // Ajouter l'adresse email du destinataire
    $mail->Subject = 'Test Email';
    $mail->Body    = 'Ceci est un test d\'envoi d\'email via PHPMailer.';

    // Envoi de l'email
    $mail->send();
    echo 'Message envoyé avec succès';
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Erreur: {$mail->ErrorInfo}";
}
?>
