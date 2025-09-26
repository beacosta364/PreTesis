<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ElectroimanController extends Controller
{
    // public function index()
    // {
    //     $controladores = DB::table('controladores')->get();
    //     $acciones = DB::table('acciones')
    //                     ->join('controladores', 'acciones.controlador_id', '=', 'controladores.id')
    //                     ->select('acciones.*', 'controladores.nombre', 'controladores.ip')
    //                     ->orderBy('fecha_hora', 'desc')
    //                     ->paginate(10);

    //     return view('home', compact('controladores', 'acciones'));
    // }
    public function index(Request $request)
{
    $controladores = DB::table('controladores')->get();

    $query = DB::table('acciones')
                ->join('controladores', 'acciones.controlador_id', '=', 'controladores.id')
                ->select('acciones.*', 'controladores.nombre', 'controladores.ip')
                ->orderBy('fecha_hora', 'desc');

    // Filtros dinámicos
    if ($request->filled('usuario')) {
        $query->where('acciones.nombre_usuario', 'like', '%'.$request->usuario.'%');
    }

    if ($request->filled('estado')) {
        $query->where('acciones.estado', $request->estado);
    }

    if ($request->filled('controlador')) {
        $query->where('controladores.nombre', 'like', '%'.$request->controlador.'%');
    }

    if ($request->filled('desde')) {
        $query->whereDate('acciones.fecha_hora', '>=', $request->desde);
    }

    if ($request->filled('hasta')) {
        $query->whereDate('acciones.fecha_hora', '<=', $request->hasta);
    }

    $acciones = $query->paginate(10)->appends($request->all());

    return view('home', compact('controladores', 'acciones'));
}


    public function guardarIp(Request $request)
    {
        $request->validate([
            'nombre' => 'nullable|string',
            'ip' => 'required|ip'
        ]);

        DB::table('controladores')->insert([
            'nombre' => $request->nombre,
            'ip' => $request->ip,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return back()->with('success', 'IP guardada correctamente');
    }

    public function abrir($id)
    {
        $controlador = DB::table('controladores')->where('id', $id)->first();

        if (!$controlador) {
            return back()->with('error', 'No se encontró el controlador');
        }

        // Capturar el usuario autenticado
        $user = Auth::user();
        $userId = $user?->id;
        $nombreUsuario = $user?->name ?? 'Invitado';

        try {
            $response = Http::timeout(3)->get("http://{$controlador->ip}/activar");

            if ($response->successful() && trim($response->body()) === "Electroimán activado") {
                DB::table('acciones')->insert([
                    'controlador_id' => $controlador->id,
                    'user_id' => $userId,
                    'nombre_usuario' => $nombreUsuario,
                    'estado' => 'exitoso',
                    'fecha_hora' => now()
                ]);
                return back()->with('success', 'Electroimán activado correctamente');
            } else {
                DB::table('acciones')->insert([
                    'controlador_id' => $controlador->id,
                    'user_id' => $userId,
                    'nombre_usuario' => $nombreUsuario,
                    'estado' => 'fallido',
                    'fecha_hora' => now()
                ]);
                return back()->with('error', 'El controlador no respondió correctamente');
            }
        } catch (\Exception $e) {
            DB::table('acciones')->insert([
                'controlador_id' => $controlador->id,
                'user_id' => $userId,
                'nombre_usuario' => $nombreUsuario,
                'estado' => 'fallido',
                'fecha_hora' => now()
            ]);
            return back()->with('error', 'No se pudo conectar al controlador');
        }
    }

    public function editar($id)
    {
        $controlador = DB::table('controladores')->where('id', $id)->first();
        if (!$controlador) {
            return back()->with('error', 'Controlador no encontrado');
        }
        return view('editar', compact('controlador'));
    }

    public function actualizar(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'nullable|string',
            'ip' => 'required|ip'
        ]);

        DB::table('controladores')->where('id', $id)->update([
            'nombre' => $request->nombre,
            'ip' => $request->ip,
            'updated_at' => now()
        ]);

        return redirect('/bodega2')->with('success', 'Controlador actualizado correctamente');
    }

    public function eliminar($id)
    {
        $controlador = DB::table('controladores')->where('id', $id)->first();

        if (!$controlador) {
            return back()->with('error', 'Controlador no encontrado');
        }

        DB::table('controladores')->where('id', $id)->delete();

        return back()->with('success', 'Controlador eliminado correctamente');
    }
}
