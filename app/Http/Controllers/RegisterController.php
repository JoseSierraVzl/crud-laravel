<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersProfile;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function registerUser(Request $request)
    {
        $getData = $request->all();

        $existingEmail = UsersProfile::where('email', $getData['email'])->first();
        $existingUserName = UsersProfile::where('fullName', $getData['fullName'])->first();

        $img = $getData['profilePicture'];

        $fileName = Str::slug($getData['fullName']) . '.' . $img->getClientOriginalExtension();
        $route = public_path('/images/');

        copy($img->getRealPath(), $route . $fileName);

        $saveRoute = asset('images/' . $fileName);

        if ($existingEmail || $existingUserName) {
            return redirect()->route('home')->with('error', 'El correo electrónico ya está registrado.');
        }

        $saveData = UsersProfile::create([
            'fullName' => $getData['fullName'],
            'dateBirth' => $getData['dateBirth'],
            'email' => $getData['email'],
            'profilePicture' => $saveRoute,
        ]);

        $saveData->saveOrFail();

        return redirect()->route('home')->with('success', 'Usuario agregado con exito.');
    }
}
