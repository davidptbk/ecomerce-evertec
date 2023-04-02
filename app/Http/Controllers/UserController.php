<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index(): View
    {
        $users = User::paginate(10);

        return view('users.index', compact('users'));
    }
    public function show(User $user)
    {
        return view('users.show', compact("user"));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact("user"));
    }

  
    public function update(UpdateUserRequest $request, User $user)
    {
        if (!Hash::check($request->get('current_password'), $user->password)){
            return redirect()-> route('users.edit',$user)-> with('error',"La contraseña no coincide")  ;
        }
        $user->name = $request->get('name');
        $user->password = Hash::make($request->get('password'));
        $user->save();
        return redirect()-> route('users.show',$user)->with('success', "El usuario fue actualizado.") ;
    }

    
    public function destroy(string $id)
    {

    }
}
