<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the clients.
     *
     * @return \Illuminate\View\View
     */
    public function index()
{
    $clients = Client::all();

    $frecuentes = $clients->filter(function ($client) {
        return $client->customer_type === 'frecuente';
    });

    $medio = $clients->filter(function ($client) {
        return $client->customer_type === 'medio';
    });

    $preferenciales = $clients->filter(function ($client) {
        return $client->customer_type === 'preferencial';
    });

    return view('clients.index', compact('frecuentes', 'medio', 'preferenciales'));
}

}
