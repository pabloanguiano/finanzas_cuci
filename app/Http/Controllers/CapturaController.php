<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Captura;
use Spatie\FlareClient\View;

class CapturaController extends Controller
{
    public function index()
    {
        $records = Captura::all();

        return view('content.capture', compact('records'));
    }

    public function store()
    {

    }
}
