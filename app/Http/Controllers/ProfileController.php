<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        // Этот middleware ограничивает доступ к контроллеру только авторизованным пользователям
        $this->middleware('auth');
    }

    public function show()
    {
        // Получаем текущего авторизованного пользователя
        $user = Auth::user();

        // Возвращаем представление с данными пользователя
        return view('profile', ['user' => $user]);
    }
}
