<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Response;

class CommentController extends Controller
{
    public function index()
    {


        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://jsonplaceholder.typicode.com/comments');
//        $response = json_decode($res);
        return $res->getBody();
    }
}
