<?php

namespace App\Http\Controllers;

use App\Models\Logement;

class LogementController extends Controller
{
    public function show($id)
    {
        $logement = Logement::with('images')->findOrFail($id);

        return view('pages.detail', compact('logement'));
    }
}