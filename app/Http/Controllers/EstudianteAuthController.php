<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Exception;

class EstudianteAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            Auth::guard('estudiante')->setCookieJar(Cookie::getFacadeRoot());
            return $next($request);
        });
    }

    public function showLoginForm()
    {
        if (Auth::guard('estudiante')->check()) {
            return redirect('student');
        }

        return view('livewire.login-estudiantes');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('usuario', 'password');
        $guard = Auth::guard('estudiante');

        try {
            if ($guard->attempt($credentials)) {
                return redirect()->intended('student');
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

        return back()->withErrors([
            'login' => 'Las credenciales proporcionadas no son válidas.',
        ]);
    }

    public function logout(Request $request)
    {
        // Obtén el guardia de autenticación
        $guard = Auth::guard('estudiante');

        // Obtén el usuario actualmente autenticado
        $user = $guard->user();

        // Si hay un usuario autenticado, realiza el cierre de sesión
        if ($user) {
            // Realiza cualquier limpieza necesaria, como invalidar tokens

            // Cierra la sesión
            $guard->logout();
        }

        // Invalida la sesión
        $request->session()->invalidate();

        // Regenera el token CSRF
        $request->session()->regenerateToken();

        // Redirige al usuario
        return redirect('/');
    }
}
