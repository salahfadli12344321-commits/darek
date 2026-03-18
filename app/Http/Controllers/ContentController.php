<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logement;

class ContentController extends Controller
{
    public function index(Request $request)
    {
        $destination = $request->destination;
        $type = $request->type;

        $logements = Logement::with('images')
            ->when($destination, function ($query) use ($destination) {
                $query->where('ville', 'like', '%' . $destination . '%');
            })
            ->when($type, function ($query) use ($type) {
                $query->where('type_bien', $type);
            })
            ->get();

        return view('pages.content', compact('logements', 'destination', 'type'));
    }
}