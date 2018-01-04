<?php

namespace App\Http\Controllers;

use APP\Slide;
use App\Services\HandleGetApi;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	return view('page.trangchu');
    }
    public function getContactus(){
    	return view('page.contact_us');
    }
    public function getAbout(){
    	return view('page.about');
    }
     public function getPage404(){
    	return view('page.404');
    }
    // =====
    public function getApi(){        
        // $resrClient = new HandleGetApi();
        // $result = $resrClient->getDataApi();
        return view('page.result');
    }  
    public function postApi(Request $request){    
        $frcountry = $request->frcountry;
        $tocountry = $request->tocountry;
        $start = $request->start;
        $end = $request->end;
        $options = $request->options;
        $countpeople = $request->countpeople;
        if($options !="on"){
            $checkpp = $options;
        }else{
            $checkpp = $countpeople;
        }

        // dd($frcountry,$tocountry,$start,$end,$checkpp);
        $resrClient = new HandleGetApi($frcountry,$tocountry,$start,$end,$checkpp);
        $result = $resrClient->getDataApi();
        $result = (array)$result;
        // dd($result);
        return view('page.result',compact('result'));
    }  
}
