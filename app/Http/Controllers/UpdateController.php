<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\UsersProfile;
use Illuminate\Support\Str;

class UpdateController extends Controller
{
    public function redirectEdit($id)
    {
        $user = UsersProfile::find($id);

        if (!$user) {
            return redirect()->route('home')->with('error', 'El usuario no existe.');
        }

        return view('pages.editUser', compact('user'));
    }

    public function updateUser(Request $request)
    {
        $getData = $request->all();

        $user = UsersProfile::find($getData['id']);

        $img = $getData['profilePicture'];

        $fileName = Str::slug($getData['fullName']) . '.' . $img->getClientOriginalExtension();
        $route = public_path('/images/');

        copy($img->getRealPath(), $route . $fileName);

        $saveRoute = asset('images/' . $fileName);

        if (!$user) {
            return redirect()->route('home')->with('error', 'El usuario no existe.');
        }

        $user->fullName = $getData['fullName'];
        $user->dateBirth = $getData['dateBirth'];
        $user->email = $getData['email'];
        $user->profilePicture = $saveRoute;

        $user->saveOrFail();

        return redirect()->route('home')->with('Mensaje', 'Usuario actualizado con exito.');
    }
}
