<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnviarContacto;
use App\Models\User;
use App\Notifications\EnviarContacto as NotificationsEnviarContacto;
use Illuminate\Http\Request;

class Estaticas extends Controller
{
    public function enviarcontacto(EnviarContacto $request)
    {
        $user=new User();
        $user->email='info@persontechnology.com';
        $user->notify(new NotificationsEnviarContacto($request));
        return redirect('/')->with('mensajeContacto', 'Person Technology te da la bienvenida y gracias por escribirnos. Intentaremos responderte lo antes posible.');

    }
}
