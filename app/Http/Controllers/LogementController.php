<?php

namespace App\Http\Controllers;

use App\Models\Logement;
   use Carbon\Carbon;

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
    $logement = Logement::with(['images', 'reservations'])->findOrFail($id);

    $reservedDates = [];

    foreach ($logement->reservations as $reservation) {
        $start = Carbon::parse($reservation->date_arrivee);
        $end = Carbon::parse($reservation->date_depart);

        while ($start <= $end) {
            $reservedDates[] = $start->format('Y-m-d');
            $start->addDay();
        }
    }

    return view('pages.detail', compact('logement', 'reservedDates'));
}
}