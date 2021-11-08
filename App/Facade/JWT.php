<?php

namespace App\Facade;

use App\Connection\Databaseconnection;

abstract class JWT
{

    public function __construct()
    {

    }

    public static function encode($payload): string {
        $env = Databaseconnection::getConnection();
        try {
            $secret = "6ea6df927cd87cc729db59881aa361c0b2ad726a8d75c1e87a2ee676fed797e3";
        } catch (\Exception $e) {
            $secret = bin2hex(random_bytes(32));
        }
        //Header
        $header = json_encode([
            'typ' => 'JWT',
            'alg' => 'HS512'
        ]);
        $base64UrlHeader = self::base64UrlEncode($header);

        //Payload
        $payload = json_encode($payload);
        $base64UrlPayload = self::base64UrlEncode($payload);

        //Signature
        $signature = hash_hmac('sha512', $base64UrlHeader . "." . $base64UrlPayload, $secret, true);
        $base64UrlSignature = self::base64UrlEncode($signature);
        return $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;
    }


    public static function validate($jwt_token) {
        $secret ="6ea6df927cd87cc729db59881aa361c0b2ad726a8d75c1e87a2ee676fed797e3";
        $parts = explode('.', $jwt_token);
        $header = base64_decode($parts[0]);
        $payload = base64_decode($parts[1]);
        $signatureProvided = $parts[2];
        $decoded_payload = json_decode($payload);
        if($decoded_payload->exp <= time()){
            throw new \Exception("Le token a expiré");
            return false;
        }

        $base64UrlHeader = self::base64UrlEncode($header);
        $base64UrlPayload = self::base64UrlEncode($payload);
        $signature = hash_hmac('sha512', $base64UrlHeader . "." . $base64UrlPayload, $secret, true);
        $base64UrlSignature = self::base64UrlEncode($signature);

        if($base64UrlSignature === $signatureProvided)
            return $decoded_payload;
        throw new \Exception("Le token est invalide");  
        return false;
    }



    private static function base64UrlEncode($text) {
        return str_replace(
            ['+', '/', '='],
            ['-', '_', ''],
            base64_encode($text)
        );
    }
}