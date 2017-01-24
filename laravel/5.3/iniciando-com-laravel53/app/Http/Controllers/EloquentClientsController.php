<?php
/**
 * Created by PhpStorm.
 * User: estev_000
 * Date: 26/10/2016
 * Time: 18:15
 */

namespace App\Http\Controllers;


use App\Client;

class EloquentClientsController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('eloquent.index', [
            'clients' => $clients
        ]);
    }

    public function create()
    {
        return view('eloquent.create');
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $client = new Client();
        $client->create($request->all());
        return redirect()->route('eloquent.client.list');
    }
}