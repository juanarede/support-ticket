<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agente;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterAgentUserController extends Controller
{
    public function register()
    {
        return view('auth.registerAgentUser');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Usuario' => 'required|string|max:255',
            'Email' => 'required|string|email|max:255|unique:agentes',
            'password' => 'required|string|min:8|confirmed',
            'Puesto' => 'required|string|max:255',
            'Sueldo' => 'required|numeric',
            'Dependencia' => 'required|string|max:255',
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

        Agente::create($validatedData);

        return redirect()->route('home')->with('success', 'User registered successfully!');
    }
}
