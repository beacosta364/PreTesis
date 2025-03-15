<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Obtenemos todos los usuarios
        return view('users.index', compact('users')); // Pasamos los usuarios a la vista
    }

    public function create()
    {
        return view('users.create'); // Retorna la vista del formulario de registro
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Crear el usuario
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Encriptar la contraseña
        ])->assignRole('user');

        return redirect()->route('users.index')->with('success', 'Usuario registrado exitosamente.');
    }
}





