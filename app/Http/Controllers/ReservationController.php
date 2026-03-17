<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Logement;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with(['logement', 'user'])->latest()->get();

        return view('pages.reservations', compact('reservations'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'logement_id' => ['required', 'exists:logements,id'],
            'date_arrivee' => ['required', 'date'],
            'date_depart' => ['required', 'date', 'after:date_arrivee'],
            'voyageurs' => ['required', 'integer', 'min:1'],
        ]);

        $logement = Logement::findOrFail($data['logement_id']);

        $dateArrivee = Carbon::parse($data['date_arrivee']);
        $dateDepart = Carbon::parse($data['date_depart']);

        $nombreNuits = $dateArrivee->diffInDays($dateDepart);
        $prixTotal = $logement->prix * $nombreNuits;

        $reservation = Reservation::create([
            'user_id' => 1, // مؤقتا حتى تزيدي auth
            'logement_id' => $data['logement_id'],
            'date_arrivee' => $data['date_arrivee'],
            'date_depart' => $data['date_depart'],
            'voyageurs' => $data['voyageurs'],
            'prix_total' => $prixTotal,
            'statut' => 'en_attente',
        ]);

        return back()->with('success', 'Réservation ' . $reservation->id . ' ajoutée avec succès');
    }
}