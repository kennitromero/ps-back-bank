<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function storeUserAccount(Request $request): JsonResponse
    {
        // con el método global dd puede explorar el contenido de la variable
        //dd($request->all());


        // Crear un usuario
        $user = User::create([
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email')
        ]);

        // Si quiero ver el contenido de un modelo, utilizo el método toArray
        //dd($user->toArray());
        //dd($user->id);

        // Crear una cuenta asociada a ese usuario
        $account = Account::create([
            'user_id' => $user->id
        ]);


        return response()->json([
            'data' => [
                'user' => [
                    'full_name' => $user->full_name,
                    'email' => $user->email,
                    'registrationAgo' => $user->created_at->diffForHumans()
                ],
                'account' => [
                    'id' => $account->id
                ]
            ]
        ], 201);
    }
}
