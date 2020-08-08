<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lib\ApiRequest;

class FrontendController extends Controller
{
    //
    public function homepage()
    {
        return view('layouts.frontend.homepage');
    }
    public function test()
    {
        // $response =  ApiRequest::getGuzzleRequest('/catalog/skus');
        $response =  ApiRequest::getGuzzleRequestest();
        // $result = array_unique($response);
        dd($response);
        $countries = [];
        foreach ($response as $key => $value) {
            dd($value);
            $unique_types = array_unique(array_map(function ($elem) {
                return $elem['countryCode'];
            }, $value));
        }
        dd($unique_types);
    }
    public function blog()
    {
        return view('layouts.frontend.blog');
    }
    public function singlepage()
    {
        return view('layouts.frontend.singlepage');
    }
}
