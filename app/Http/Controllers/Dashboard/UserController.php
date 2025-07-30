<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    /**
     * Almacena un nuevo usuario registrado por un administrador.
     */

    public function index(){
        $usuarios = User::all();

        return view('dashboard.index', compact('usuarios'));
    }


    public function store(Request $request)
{
    // Validar los datos
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
        'rol' => ['required', 'in:admin,cliente'], // Cambio: admin o cliente
    ]);

    // Crear el usuario
    $user = User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
        'rol' => $validated['rol'],
    ]);

    // Redirigir de vuelta con un mensaje de éxito
    return redirect()->back()->with('success', 'Usuario registrado correctamente.');
}

    public function destroy(User $user)
{
    try {
        // Verificar que no se elimine a sí mismo
        if (auth()->id() === $user->id) {
            return redirect()->route('dashboard.index')
                ->with('error', 'No puedes eliminarte a ti mismo.');
        }

        // Eliminar el usuario
        $user->delete();

        return redirect()->route('dashboard.index')
            ->with('success', 'Usuario eliminado correctamente.');

    } catch (\Exception $e) {
        return redirect()->route('dashboard.index')
            ->with('error', 'Error al eliminar el usuario.');
    }
}
}
