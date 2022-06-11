<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Arr;

class ProfilController extends Controller
{
    public function index(User $user)
    {
        $user = auth()->user();
        return view('profil.index',compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('profil.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
        $user = User::find($id);
        $user->update($input);
        return redirect()->route('profil')
        ->with('success','Profil berhasil diubah');
    }
}
