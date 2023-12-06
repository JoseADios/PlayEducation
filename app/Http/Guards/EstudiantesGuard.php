<?php

namespace App\Http\Guards;

use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use App\Models\Grupo;
use Carbon\Carbon;
use Illuminate\Contracts\Cookie\QueueingFactory as CookieJar;

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

    protected $cookie;

    public function setCookieJar(CookieJar $cookie)
    {
        $this->cookie = $cookie;
    }

    public function attempt(array $credentials = [], $remember = false)
    {
        $estudiante = Estudiante::where('usuario', $credentials['usuario'])->first();
        if (!$estudiante) {
            throw new \Exception('Los datos proporcionados no coinciden con nuestros registros.');
        }

        $grupo = Grupo::where('id', $estudiante->grupo_id)->first();
        $pass = $grupo->password_temp;
        $fechaExpiracion = $grupo->fecha_expiracion;

        // Comprueba si la fecha de expiración ya ha pasado
        if (Carbon::now()->greaterThan($fechaExpiracion)) {
            throw new \Exception('La contraseña ha expirado, contacta con tu profesor para que te proporcione una nueva.');
        }

        if ($credentials['password'] != $pass) {
            throw new \Exception('Los datos proporcionados no coinciden con nuestros registros.');
        }

        $this->login($estudiante, $remember);

        return true;
    }
}
