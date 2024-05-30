<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $userType = $request->input('user_type');

        if ($userType === 'external') {
            if (Auth::guard('external')->attempt($credentials)) {
                // Usuario externo autenticado, redirigir a la página externa
                return redirect()->route('external.dashboard');
            }
        } elseif ($userType === 'agent') {
            if (Auth::guard('agent')->attempt($credentials)) {
                // Agente autenticado, redirigir a la página de agente
                return redirect()->route('agent.dashboard');
            }
        }

        // Si la autenticación falla, redirigir de nuevo al formulario de inicio de sesión con un mensaje de error
        return redirect()->route('login')->with('error', 'Credenciales inválidas');
    }
}
