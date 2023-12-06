<?php

namespace App\Http\Guards;

use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use App\Models\Grupo;

class EstudiantesGuard extends SessionGuard
{
    /**
     * Create a new guard instance.
     *
     * @param string $name
     * @param UserProvider $userProvider
     * @param Session $session
     * @param array $config
     */
    public function __construct($name, UserProvider $userProvider, Session $session, Request $request)
    {
        parent::__construct($name, $userProvider, $session, $request);
    }

    /**
     * Attempt to authenticate a user using the given credentials.
     *
     * @param array $credentials
     * @param bool $remember
     * @return bool
     */
    public function attempt(array $credentials = [], $remember = false)
    {
        $estudiante = Estudiante::where('usuario', $credentials['usuario'])->first();
        if (!$estudiante) {
            return false;
        }

        $pass = Grupo::where('id', $estudiante->grupo_id)->first()->password_temp;
        if ($credentials['password'] != $pass) {
            dd('La contraseña proporcionada no coincide con la contraseña del grupo.'); // Imprime un mensaje si la contraseña no coincide
            return false;
        }

        $this->login($estudiante, $remember);

        return true;
    }
}
