<?php

namespace App\Http\Controllers;

use App\Models\Logement;

class LogementController extends Controller
{
    public function index()
    {
        $logements = Logement::with('images')->latest()->get();

        $logementsParVille = $logements->groupBy('ville');

        return view('pages.content', compact('logementsParVille'));
    }

    public function show($id)
    {
        $logement = Logement::with('images')->findOrFail($id);

        return view('pages.detail', compact('logement'));
    }
}