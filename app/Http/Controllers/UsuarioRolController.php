<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioRolController extends Controller
{
    public function index()
{
    // Obtener usuarios con sus roles actuales
    $usuarios = DB::table('users')
        ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
        ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
        ->select('users.id', 'users.name', 'roles.id AS role_id', 'roles.name AS role_name')
        ->get();

    // Obtener todos los roles disponibles
    $roles = DB::table('roles')->select('id', 'name')->get();

    return view('usuarios.roles', compact('usuarios', 'roles'));
}

    public function actualizarRol(Request $request)
    {
        $user_id = $request->input('user_id');
        $role_id = $request->input('role_id');

        // Actualizar el rol en la tabla model_has_roles
        DB::table('model_has_roles')
            ->where('model_id', $user_id)
            ->update(['role_id' => $role_id]);

        return redirect()->back()->with('success', 'Rol actualizado correctamente.');
    }

}
