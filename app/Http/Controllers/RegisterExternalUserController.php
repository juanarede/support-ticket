<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsuarioExterno;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterExternalUserController extends Controller
{
    public function register()
    {
        return view('auth.registerExternalUser');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Usuario' => 'required|string|max:255',
            'Email' => 'required|string|email|max:255|unique:usuarios_externos',
            'password' => 'required|string|min:8|confirmed',
            'Empresa' => 'nullable|string|max:255',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->with('email_error', 'Este correo electrónico ya está en uso.')->withInput();
        }

        $validatedData = $validator->validated();

        if ($request->hasFile('imagen')) {
            $imagePath = $request->file('imagen')->store('profile_images', 'public');
            $validatedData['imagen'] = $imagePath;
        }

        $validatedData['password'] = Hash::make($validatedData['password']);

        UsuarioExterno::create($validatedData);

        return redirect()->route('home')->with('success', 'User registered successfully!');
    }
}

