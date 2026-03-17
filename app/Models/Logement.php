<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logement extends Model
{
    protected $fillable = [
        'user_id',
        'titre',
        'slug',
        'ville',
        'adresse',
        'description',
        'type_bien',
        'type_location',
        'prix',
        'devise',
        'chambres',
        'salles_de_bain',
        'salons',
        'surface',
        'voyageurs',
        'image_principale',
        'statut',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(logementImage::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function avis()
    {
        return $this->hasMany(Avis::class);
    }
}