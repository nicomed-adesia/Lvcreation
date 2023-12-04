<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{team,service};

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class accueilController extends Controller
{
    public function bienvenu()
    {
        $team = team::all();
        $service = service::all();
        return view('clients.page.bienvenu',compact('team', 'service'));
    }

    public function products()
    {
        return view('clients.page.produit');
    }
    public function checkout()
    {
        return view('clients.page.checkout');
    }
}
