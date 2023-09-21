<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use GuzzleHttp\Cookie\SessionCookieJar;
class AuthController extends Controller
{
    

    public function Edt(Request $request) {
    $username = $request->username;
    $password = $request->password;



    // Effectuez la requête de connexion à l'URL de connexion de Pepal
    $loginResponse = $httpClient->post('https://www.pepal.eu/include/php/ident.php', [
        'form_params' => [
            'login' => $username,
            'pass' => $password,
        ],
    ]);

    // Vérifiez si la connexion a réussi
    if ($loginResponse->getStatusCode() == 200) {
        // Effectuez d'autres requêtes HTTP liées à la session en utilisant le même client GuzzleHTTP
        $edtResponse = $httpClient->get('https://www.pepal.eu/?my=edt');

        // Vérifiez la réponse de la requête EDT
        if ($edtResponse->getStatusCode() == 200) {
            $array = preg_split("/\r\n|\n|\r/", $edtResponse->getBody()->getContents());
            foreach($array as $line) {
                if(str_contains($line, 'events:[{"id')) {


                    $pos = strpos($line, 'events:');
                    $line = substr($line, $pos + strlen('events:'));

    $line = substr($line, 0, -1);


                    // Décodez la chaîne JSON en un tableau associatif
                    $data = json_decode($line, true);
                       dd($data);
                }
            }

            return response()->header('Content-Type', 'text/html');
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch page',
            ], $edtResponse->getStatusCode());
        }
    } else {
        return response()->json([
            'status' => 'error',
            'message' => 'Failed to login',
        ], $loginResponse->getStatusCode());
    }
/*      $token = $request->bearerToken();
        if(!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Missing login token',
            ], 400);
        }
        $response = Http::withCookies([
            'sdv' => $token,
        ], 'www.pepal.eu')->get('https://www.pepal.eu/?my=edt');
        if ($response->successful()) {
            return response($response->body())->header('Content-Type', 'text/html');
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch page',
            ], $response->status());
        }
*/
    }
}
