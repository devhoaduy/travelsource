<?php
namespace App\Services;
use App\Services\TokenHolder;
// define("GET", "GET");
// define("POST", "POST");
// define("PUT", "PUT");
// define("DELETE", "DELETE");

class RestClient {
    
    // private $config;
    
    // public function __construct() {
    //     $this->config = SACSConfig::getInstance();
    // }
    
    public function executeGetCall($path, $request) {
        $result = curl_exec($this->prepareCall('GET', $path, $request));
        return json_decode($result);
    }
    
    public function executePostCall($path, $request) {
        $result = curl_exec($this->prepareCall('POST', $path, $request));
        return json_decode($result);
    }
    
    private function buildHeaders() {
        $headers = array(
            'Authorization: Bearer '.TokenHolder::getToken()->access_token,
            'Accept: */*'
        );
        return $headers;
    }
    
    private function prepareCall($callType, $path, $request) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $callType);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $headers = $this->buildHeaders();
        switch ($callType) {
        case 'GET':
            $url = $path;
            if ($request != null) {
                $url = env('ENVIRONMENT').$path.'?'.http_build_query($request);
            }
            // dd( $url );
            curl_setopt($ch, CURLOPT_URL, $url);
            break;
        case 'POST':
            curl_setopt($ch, CURLOPT_URL, env('ENVIRONMENT').$path);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
            array_push($headers, 'Content-Type: application/json');
            break;
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        return $ch;
    }
}
