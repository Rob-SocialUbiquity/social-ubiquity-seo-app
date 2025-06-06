<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client; 

class ClientController extends Controller
{
    public function index()
    {
        return view('admin.clients.index', [
            'clients' => Client::all()
        ]);
    }
}
