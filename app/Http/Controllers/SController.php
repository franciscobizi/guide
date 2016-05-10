<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
        public function login()
        {
            return view('login');
            
        }
        public function cadastro($cadastro)
        {
            return view('welcome',['cadastro'=>$cadastro]);
            
        }
}
