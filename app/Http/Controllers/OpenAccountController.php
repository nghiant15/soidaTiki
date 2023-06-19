<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use GuzzleHttp\Client;

use Jenssegers\Agent\Agent;
use Session;



class OpenAccountController extends Controller
{

    public function openAccount (Request $request) 
    {

        $url ="http://http://192.168.1.37:3002:3002/api/guest/getInfoOpenAccount";
        $client = new Client();
        $data = null;


        $res = $client->request('post', $url, [
            
        ]);

        if($res->getStatusCode() ==200)
        {
            $checkresult = $res->getBody()->getContents();

        
            $checkresult = json_decode($checkresult);
        
            $data = $checkresult->data;
           
        }

        
        
         return view("openAccount", compact("data"));
    }

}
