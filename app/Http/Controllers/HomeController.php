<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    // (اختياري) غير باش تشوف الريكويسط فالبداية
    public function search(Request $request)
    {
        $data = $request->validate([
            'city' => 'nullable|string|max:120',
            'check_in' => 'nullable|date',
            'check_out' => 'nullable|date|after_or_equal:check_in',
            'guests' => 'nullable|integer|min:1|max:20',
        ]);

        return view('pages.search', compact('data'));
    }
}