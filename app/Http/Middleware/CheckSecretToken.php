<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckSecretToken
{
    public function handle(Request $request, Closure $next): Response
    {
        // Définition du token attendu (peut être défini ailleurs, ex: .env)
        $expectedToken = config('app.secret_token', 'default-secret');

        // Vérification du paramètre 'secret' dans l'URL
        if ($request->query('secret') !== $expectedToken) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        view()->share('expectedToken', $expectedToken);

        return $next($request);
    }
}
