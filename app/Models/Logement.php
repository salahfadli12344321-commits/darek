<?php

namespace App\Models;

use App\Models\Avis;
use App\Models\LogementImage;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Ville;

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
    return $this->hasMany(LogementImage::class, 'logement_id');
}

public function villeRelation()
{
    return $this->belongsTo(Ville::class, 'id_ville', 'id_ville');
}
    public function avis()
    {
        return $this->hasMany(Avis::class);
    }
}