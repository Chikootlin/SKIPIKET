<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function updateImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $user = Auth::user();

        // Buat nama file unik
        $fileName = time() . '.' . $request->image->extension();

        // Simpan file ke folder public/images/profiles
        $request->image->move(public_path('images/profiles'), $fileName);

        // Hapus foto lama kalau ada
        if ($user->image && file_exists(public_path('images/profiles/' . $user->image))) {
            unlink(public_path('images/profiles/' . $user->image));
        }

        /** @var \App\Models\User $user */
        // Update database
        $user->image = $fileName;
        $user->save();

        return back()->with('success', 'Profile picture updated!');
    }

}
