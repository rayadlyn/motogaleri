<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;

class ProfilController extends Controller
{
    public function show()
    {
        // Ambil data user berdasarkan ID atau email, sesuai dengan kebutuhan aplikasi Anda
        $user = User::find(auth()->id()); // Contoh mengambil berdasarkan ID user yang sedang login

        // Jika menggunakan authentikasi dengan middleware 'auth', Anda bisa langsung menggunakan auth()->user() untuk mendapatkan data user yang sedang login.

        return view('profil', compact('user'));
    }
}
