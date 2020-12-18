<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PostController extends Controller
{
    public function index()
    {

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts');
        $res = json_decode($res->getBody(), true);
        foreach ($res as $key => $x) {
            $total = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts/' . $x['id'] . '/comments');
            $cTotal = count(json_decode($total->getBody(), true));
            if (!$cTotal)
                $cTotal = 0;
            $res[$key]['totalComments'] = $cTotal;
        }
        usort($res, function ($a, $b) {
            return $a['totalComments'] <=> $b['totalComments'];
        });
        return view('posts.index', compact('res'));
    }

    public function show($id)
    {
        $client = new \GuzzleHttp\Client();
        $post = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts/' . $id);
        $comments = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts/' . $id . '/comments');

        $post = json_decode($post->getBody());
        $comments=json_decode($comments->getBody());
        return view('posts.show', compact('post','comments'));

    }

}
