<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logement;
use App\Models\LogementImage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class HostController extends Controller
{
    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:120'],
            'telephone' => ['required', 'string', 'max:30'],
            'ville' => ['required', 'string', 'max:80'],
            'type_bien' => ['required', 'string', 'max:80'],
            'type_location' => ['nullable', 'string', 'max:80'],
            'prix' => ['nullable', 'numeric'],
            'devise' => ['nullable', 'string', 'max:10'],
            'chambres' => ['nullable', 'integer'],
            'sdb' => ['nullable', 'integer'],
            'salons' => ['nullable', 'integer'],
            'surface' => ['nullable', 'numeric'],
            'adresse' => ['nullable', 'string', 'max:255'],
            'message' => ['nullable', 'string', 'max:1000'],
            'photos' => ['nullable', 'array', 'max:8'],
            'photos.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'conditions' => ['required', 'accepted'],
        ]);

        $user = User::firstOrCreate(
            ['email' => $data['email']],
            [
                'name' => $data['nom'],
                'phone' => $data['telephone'],
                'role' => 'hote',
                'password' => Hash::make('password123'),
                'is_active' => true,
            ]
        );

        $logement = Logement::create([
            'user_id' => $user->id,
            'titre' => $data['type_bien'] . ' à ' . $data['ville'],
            'slug' => Str::slug($data['type_bien'] . '-' . $data['ville'] . '-' . uniqid()),
            'ville' => $data['ville'],
            'adresse' => $data['adresse'] ?? null,
            'description' => $data['message'] ?? 'Pas de description',
            'type_bien' => $data['type_bien'],
            'type_location' => $data['type_location'] ?? 'Nuit',
            'prix' => $data['prix'] ?? 0,
            'devise' => $data['devise'] ?? 'MAD',
            'chambres' => $data['chambres'] ?? 1,
            'salles_de_bain' => $data['sdb'] ?? 1,
            'salons' => $data['salons'] ?? 0,
            'surface' => $data['surface'] ?? null,
            'voyageurs' => 1,
            'image_principale' => null,
            'statut' => 'publie',
        ]);

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $index => $photo) {
                $path = $photo->store('logements', 'public');

                LogementImage::create([
                    'logement_id' => $logement->id,
                    'image_path' => $path,
                    'is_primary' => $index === 0,
                ]);

                if ($index === 0) {
                    $logement->update([
                        'image_principale' => $path,
                    ]);
                }
            }
        }

        return back()->with('success', 'Demande envoyée avec succès ✅');
    }
}