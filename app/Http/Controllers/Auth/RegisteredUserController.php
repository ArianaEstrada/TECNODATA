<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Persona;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $roles = Rol::whereIn('desc_rol', ['Cliente', 'Empleado'])->get();
        return view('auth.register', compact('roles'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:50'],
            'ap' => ['required', 'string', 'max:50'],
            'am' => ['required', 'string', 'max:50'],
            'telefono' => ['required', 'string', 'max:15'],
            'correo' => ['required', 'string', 'email', 'max:30', 'unique:personas,correo'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'id_rol' => ['required', 'exists:roles,id_rol'],
        ]);

        DB::beginTransaction();

        try {
            // Crear la persona
            $persona = Persona::create([
                'nom' => $request->nom,
                'ap' => $request->ap,
                'am' => $request->am,
                'telefono' => $request->telefono,
                'correo' => $request->correo,
                'contrasena' => Hash::make($request->password),
                'id_rol' => $request->id_rol,
            ]);

            // Crear registro específico según el rol
            if ($request->id_rol == Rol::where('desc_rol', 'Cliente')->first()->id_rol) {
                Cliente::create(['id_persona' => $persona->id_persona]);
            } else {
                Empleado::create(['id_persona' => $persona->id_persona]);
            }

            // Crear usuario para autenticación
            $user = User::create([
                'name' => "$request->nom $request->ap",
                'email' => $request->correo,
                'password' => Hash::make($request->password),
                'id_persona' => $persona->id_persona,
            ]);

            DB::commit();

            event(new Registered($user));
            Auth::login($user);

            return redirect(route('dashboard', absolute: false));

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Error en el registro: ' . $e->getMessage()]);
        }
    }
}
