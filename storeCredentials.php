<?php
// Récupérer les données du formulaire d'inscription
$newUsername = $_POST['newUsername'];
$newPassword = $_POST['newPassword'];

// Chemin du fichier de stockage des identifiants
$filePath = 'credentials.txt';

// Format des données à stocker dans le fichier texte
$data = $newUsername . ':' . $newPassword . PHP_EOL;

// Ouvrir le fichier en mode écriture (sans créer de nouveau fichier)
$file = fopen($filePath, 'a');

// Vérifier si l'ouverture du fichier a réussi
if ($file) {
    // Écrire les données dans le fichier
    fwrite($file, $data);
    // Fermer le fichier
    fclose($file);
    // Répondre avec un message de succès
    echo 'Inscription réussie ! Connectez-vous';
} else {
    // Répondre avec un message d'erreur en cas d'échec d'ouverture du fichier
    echo 'Erreur lors de l\'inscription. Veuillez réessayer.';
}
?>
