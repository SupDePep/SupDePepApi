<?php

namespace App\Services\Pepal;

use GuzzleHttp\Client;
use GuzzleHttp\Cookie\SessionCookieJar;
use GuzzleHttp\Exception\GuzzleException;

class AuthService
{
    /**
     * @throws GuzzleException
     */
    public function login(string $username, string $password): bool|Client
    {
        $cookieJar = new SessionCookieJar('my_session', true);
        $httpClient = new Client(['cookies' => $cookieJar]);
        $request = $httpClient::post('https://www.pepal.eu/include/php/ident.php', [
            'login' => $username,
            'pass' => $password
        ]);
        if (strpos($request->getBody(), 'Accès valide') !== false) {
            return $httpClient;
        } else {
            return false;
        }
    }
}