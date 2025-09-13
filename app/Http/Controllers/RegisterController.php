<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $userData = $request->validate([
            'name' => ['required', 'string'],
            'fullname' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        $userData['password'] = bcrypt($userData['password']);

        $userData['nis'] = $this->generateUniqueNumber('nis', 8);
        $userData['nisn'] = $this->generateUniqueNumber('nisn', 8);

        $user = User::create($userData);

        Auth::login($user);

        return redirect()->route('login');

    }

    private function generateUniqueNumber(string $column, int $length): string
    {
        do {
            $number = str_pad(mt_rand(0, pow(10, $length) - 1), $length, '0', STR_PAD_LEFT);
        } while (User::where($column, $number)->exists());

        return $number;
    }
}
