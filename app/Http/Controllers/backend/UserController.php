<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{

    public function staff(){
        $data['users'] = User::all();
        return view('backend.superadmin.staff')->with($data);
    }

    public function store(Request $request){
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'mobile' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'country' => $request->country,
            'address' => $request->address,
            'user_type' => $request->user_type,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->back()->with('success', 'User created successfully');
    }

    public function edit(User $user)
    {
        $data['user'] = $user;
        $data['users'] = User::all();
        return view('backend.superadmin.staff')->with($data);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users,email,' . $user->id,
            ],
            'mobile' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users,mobile,' . $user->id,
            ],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'country' => $request->country,
            'address' => $request->address,
            'user_type' => $request->user_type,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('staff')->with('success', 'User created successfully');
    }
}
