<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class TuristController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
        public function index()
        {
            return view('turist.turist');
            
        }
        
        public function city(Request $request)
        {
            $city = $request->get('city');
            return view('turist.city',['city'=>$city]);
            
        }
        
        public function mapa()
        {
            
            return view('turist.mapacity');
            //echo "I'm getting an response";
        }
        
        public function guia()
        {
            
            //return view('turist.mapacity');
            echo "I'm getting an response";
        }
}
