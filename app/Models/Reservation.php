<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id',
        'logement_id',
        'date_arrivee',
        'date_depart',
        'voyageurs',
        'prix_total',
        'statut',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function logement()
    {
        return $this->belongsTo(Logement::class);
    }

    public function avis()
    {
        return $this->hasOne(Avis::class);
    }

    public function paiement()
    {
        return $this->hasOne(Paiement::class);
    }
}