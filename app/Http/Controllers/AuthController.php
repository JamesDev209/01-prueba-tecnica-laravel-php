<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
    {
        return view("modules.auth.login"); 
    }

    public function logear(Request $request)
    {
        // Validar datos
        $credenciales = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Buscar usuario por email
        $user = User::where('email', $request->email)->first();

        // Verificar usuario y contraseña
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()
                ->withErrors(['email' => 'Credenciales incorrectas'])
                ->withInput();
        }

        // Iniciar sesión
        Auth::login($user);
        $request->session()->regenerate();

        return to_route('home');
    }

    public function crearAdmin()
    {
        User::create([
            'name' => 'gestion de clientes',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'rol' => 'admin'
        ]);

        return "admin creado exitosamente";
    }

    //funcion de logout salir
    public function salir(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login');
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}