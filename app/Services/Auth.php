<?php
namespace App\Services;
// include_once 'configuration/SACSConfig.php';

class Auth {
    
    // private $config;
    
    // public function __construct() {
    //     $this->config = SACSConfig::getInstance();
    // }
    
    public function callForToken() {
        $ch = curl_init(env('ENVIRONMENT').env('ACTION_GET_AUTH'));
        $vars = "grant_type=client_credentials";
        $headers = array(
            'Authorization: Basic '.$this->buildCredentials(),
            'Accept: */*',
            'Content-Type: application/x-www-form-urlencoded'
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result);
    }
    
    private function buildCredentials() {
        $credentials = env('FORMAT_VERSION').":".env('USER_ID').":".env('GROUP').":".env('DOMAIN');
        $secret = base64_encode(env('CLIENT_SECRET'));
        return base64_encode(base64_encode($credentials).":".$secret);
    }
}