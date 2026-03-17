<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class logementImage extends Model
{
    protected $table = 'logement_images';

    protected $fillable = [
        'logement_id',
        'image_path',
        'is_primary',
    ];

    public function logement()
    {
        return $this->belongsTo(Logement::class);
    }
}