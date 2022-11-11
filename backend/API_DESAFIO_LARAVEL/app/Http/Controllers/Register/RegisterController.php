<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $request->validate([
            'email' => 'required|string|unique:users,email' // Não to acreditando que laravel me dá isso pronto

        ]);

        $data = $request->all();
        $data['password'] = $request->password;

        $user = User::create($data);

        return $user;
    }
}
