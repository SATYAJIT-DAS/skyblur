<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lib\ApiRequest;

class FrontendController extends Controller
{
    //
    public function homepage(){
         return view('layouts.frontend.homepage');
    }
    public function test(){
         return ApiRequest::getGuzzleRequest('/catalog/skus');
    }
}
