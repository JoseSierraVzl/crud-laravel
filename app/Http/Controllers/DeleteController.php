<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersProfile;

class DeleteController extends Controller
{
    public function deleteUser($id)
    {
        $user = UsersProfile::find($id);

        if (!$user) {
            return redirect()->route('home')->with('error', 'El usuario no existe.');
        }

        $user->delete();
        return redirect()->route('home')->with('Exitoso', 'Usuario eliminado con exito.');
    }
}
