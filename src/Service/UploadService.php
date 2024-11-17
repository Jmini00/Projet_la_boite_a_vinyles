<?php

namespace App\Service;

/**
 * Permet d'uploader une image
 */
class UploadService
{
    public function upload(array $file, ?string $deleteOldFile = null): string|bool
    {
        // Récupérer l'extension du fichier
        $extension = pathinfo($file['name'], PATHINFO_EXTENSION);

        // Vérifie si l'extension est autorisée
        if (
            $file['size'] <= (2 * 1024 * 1024) &&
            in_array($extension, ['png', 'gif', 'jpeg', 'jpg', 'webp'])
        ) {
            // Génère un nouveau pour l'image
            $newName = md5(uniqid('', true)) .'.'. $extension;

            // Si un ancien nom de fichier est fourni, on le supprime
            if ($deleteOldFile !== null) {
                unlink($_ENV['FOLDER_PROJECT'] . $deleteOldFile);
            }

            // Upload le fichier
            move_uploaded_file(
                $file['tmp_name'],
                $_ENV['FOLDER_PROJECT'] . $newName
            );

            // Retourne le nouveau nom du fichier
            return $newName;
        }

        return false;
    }
}
