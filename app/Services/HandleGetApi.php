<?php
namespace App\Services;
use App\Services\RestClient;

class HandleGetApi {
	private $origin ;
    private $destination ; 
    private $departureDate ; 
    private $returnDate ;
    private $passengercount;
    public function __construct($origin, $destination, $departureDate, $returnDate, $passengercount) {
        $this->origin = $origin;
        $this->destination = $destination;
        $this->departureDate = $departureDate;
        $this->returnDate = $returnDate;
        $this->passengercount = $passengercount;
    }
    public function getDataApi(){
    	$resrClient = new RestClient();
    	return $resrClient->executeGetCall(env('ACTION_GET_FARE_FLIHTS'),$this->getRequest($this->origin,$this->destination,$this->departureDate,$this->returnDate,$this->passengercount));
    }
    private function getRequest($origin, $destination, $departureDate,$returnDate, $passengercount) {
        $request = array(
                "lengthofstay" => "5",                
                "origin" => $origin,
                "destination" => $destination,
                "departuredate" => $departureDate,
                "returndate"=>$returnDate,
                "passengercount"=>$passengercount,
                "limit"=>'10',
                "pointofsalecountry" => "US",
                // "enabletagging" => 'true'
        );
        return $request;
    }
}