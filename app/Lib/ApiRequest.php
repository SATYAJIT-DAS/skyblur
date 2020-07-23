<?php
namespace App\Lib;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class ApiRequest
{
    public static $url = "https://qa.valuetopup.com/api/v1";
    public static $auth =['apiuser','Buuu256$g'];
    public static function getGuzzleRequest($apilink){
        $client = new Client();
        $request = $client->get(ApiRequest::$url.$apilink,['auth'=> ApiRequest::$auth]);
        if ($request->getBody()) {
            $response= $request->getBody();
            $response = json_decode($response);

           // $response =(object)$response->payload;
            dd($response);
            foreach ($response as $key => $value) {
                echo "<br>";
                print_r($value);
            }


        }
    }

    public static function postGuzzleRequest(){
        $client = new Client();
        $request = $client->post(ApiRequest::$url,['auth'=> ApiRequest::$auth]);
        $response = $request->send();
        dd($response);
    }

    public static function putGuzzleRequest(){
        $client = new Client();
        $request = $client->put(ApiRequest::$url,['auth'=> ApiRequest::$auth]);
        $response = $request->send();
        dd($response);
    }

    public static function deleteGuzzleRequest(){
        $client = new Client();
        $request = $client->delete(ApiRequest::$url,['auth'=> ApiRequest::$auth]);
        $response = $request->send();
        dd($response);
    }
}
