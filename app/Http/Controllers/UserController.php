<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Obtenemos todos los usuarios
        return view('users.index', compact('users')); // Pasamos los usuarios a la vista
    }
}
