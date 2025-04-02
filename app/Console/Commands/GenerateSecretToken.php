<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class GenerateSecretToken extends Command
{
    protected $signature = 'generate:secret';
    protected $description = 'Génère un token secret et l\'ajoute dans le fichier .env';

    public function handle()
    {
        $newToken = Str::random(32); // Génère un token aléatoire de 32 caractères

        // Récupère le contenu du fichier .env
        $envPath = base_path('.env');
        if (!File::exists($envPath)) {
            $this->error('.env file not found!');
            return;
        }

        $envContent = File::get($envPath);

        // Remplace l'ancienne valeur de APP_SECRET_TOKEN si elle existe
        if (preg_match('/^APP_SECRET_TOKEN=.*$/m', $envContent)) {
            $envContent = preg_replace('/^APP_SECRET_TOKEN=.*$/m', "APP_SECRET_TOKEN={$newToken}", $envContent);
        } else {
            $envContent .= "\nAPP_SECRET_TOKEN={$newToken}\n";
        }

        // Écrit les nouvelles valeurs dans .env
        File::put($envPath, $envContent);

        $this->info("Nouveau token généré : {$newToken}");
        $this->info("Le fichier .env a été mis à jour !");
        $this->call('config:clear');

    }
}
