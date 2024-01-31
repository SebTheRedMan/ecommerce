<?php
namespace App\Service;

use DateTimeImmutable;

class JWTService{
    // on génère le token
    public function generate(array $header, array $payload, string $secret, int $validity = 10800) : string
    {
        if ($validity > 0) {
            $now = new DateTimeImmutable();
            $exp = $now->getTimestamp() + $validity;

            $payload['iat'] = $now->getTimestamp();
            $payload['exp'] = $exp;
        }

        // on encode en base64
        $base64Header = base64_encode(json_encode($header));
        $base64Payload = base64_encode(json_encode($payload));

        // on nettoie les valeurs encodées (retrait des +, / et =)
        $base64Header = str_replace(['+', '/', '='], ['-', '_', ''], $base64Header);
        $base64Payload = str_replace(['+', '/', '='], ['-', '_', ''], $base64Payload);

        $secret = base64_encode($secret);

        $signature = hash_hmac('sha256', $base64Header . '.' . $base64Payload, $secret, true);

        $base64Signature = base64_encode($signature);
        $base64Signature = str_replace(['+', '/', '='], ['-', '_', ''], $base64Signature);

        $jwt = $base64Header . '.' . $base64Payload . '.'  . $base64Signature;
        return $jwt;    
    }

    // on vérifie que le token soit valide (correctement formé)
    public function isValid(string $token): bool
    {
        return preg_match(
            '/^[a-zA-Z0-9\-\_\=]+\.[a-zA-Z0-9\-\_\=]+\.[a-zA-Z0-9\-\_\=]+$/',
            $token
        ) === 1;
    }

    // on récupère le payload
    public function getPayload(string $token): array
    {
        // on démonte le token
        $array = explode('.', $token);

        // on décode le payload
        return json_decode(base64_decode($array[1]), true);
    }

    // on récupère le header
    public function getHeader(string $token): array
    {
        // on démonte le token
        $array = explode('.', $token);

        // on décode le payload
        return json_decode(base64_decode($array[0]), true);
    }

    // on vérifie la date d'expiration
    public function isExpired(string $token): bool
    {
        $payload = $this->getPayload($token);

        $now = new DateTimeImmutable();

        return $payload['exp'] < $now->getTimestamp();
    }

    // on vérifie la signature du token
    public function check(string $token, string $secret): bool
    {
        $header = $this->getHeader($token);
        $payload = $this->getPayload($token);

        // regénère un token
        $verifToken = $this->generate($header, $payload, $secret, 0);

        return $token === $verifToken;
    }
}