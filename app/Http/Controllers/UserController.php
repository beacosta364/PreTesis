<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // $users = User::all(); // Obtenemos todos los usuarios
        // return view('users.index', compact('users')); // Pasamos los usuarios a la vista
        $query = User::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'LIKE', "%$search%")
                ->orWhere('email', 'LIKE', "%$search%");
        }

        $users = $query->paginate(500); // Paginación para mejorar rendimiento

        return view('users.index', compact('users'));
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

    //eliminar usuario por id
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Evita que un usuario se elimine a sí mismo si estás autenticado
        if (auth()->user()->id == $user->id) {
            return redirect()->route('users.index')->with('error', 'No puedes eliminar tu propio usuario.');
        }

        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuario eliminado exitosamente.');
    }

}





