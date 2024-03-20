<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    public function index()
    {
        // Ambil semua data album dari database
        $albums = Album::all();

        // Render tampilan album dan lemparkan data album ke tampilan tersebut
        return view('album', ['albums' => $albums]);
    }

    public function store(Request $request)
    {
        // Validasi permintaan
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Pastikan itu adalah gambar dengan ekstensi yang diizinkan dan ukuran file maksimum adalah 2MB
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Simpan gambar ke dalam penyimpanan yang diinginkan (misalnya: public storage)
        $imagePath = $request->file('image')->store('images', 'public');

        // Buat record album baru
        Album::create([
            'image' => $imagePath,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // Redirect ke halaman album dengan pesan sukses
        return redirect()->route('album')->with('success', 'Album berhasil ditambahkan.');
    }
}
