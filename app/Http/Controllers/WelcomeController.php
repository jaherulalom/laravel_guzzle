<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use GuzzleHttp\Client;
use Guzzle\Http\EntityBody;
use GuzzleHttp\Message\Request;
use GuzzleHttp\Message\Response;

class WelcomeController extends Controller
{

    public function index()
    {
        //
        return view ('welcome');
    }

    public function getApi(){

       $client = new Client();
         $response = $client->get('https://play.geokey.org.uk/api/projects/77');
            
            $body = $response->getBody()->getContents();
             $project = json_decode($body);

        $client1 = new Client();
        $response1 = $client1->get('https://play.geokey.org.uk/api/projects/77/contributions/');
        $body1 = $response1->getBody()->getContents();
        $contributions = json_decode($body1);
            
        return view ('response', compact('project'));

            // return ($project->name);

    }

    public function contributions(){

        $client = new Client();
        $response = $client->get('https://play.geokey.org.uk/api/projects/77/contributions/');
        $body = $response->getBody()->getContents();
        $contributions = json_decode($body);

        return response()->json($contributions);
    }


}
