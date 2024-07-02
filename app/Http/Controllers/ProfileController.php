<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function profile(Request $request): View
    {
        if ($request->id){
            $data['user'] = User::query()->findOrFail($request->id);
        }else{
            $data['user']  = Auth::user();
        }
        return view('backend.profile')->with($data);
    }

    public function edit(Request $request): View
    {
        $data['user']  = Auth::user();
        return view('backend.edit-profile')->with($data);
//        return view('profile.edit', [
//            'user' => $request->user(),
//        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {

        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'country' => $request->country,
            'address' => $request->address,
        ]);

//        $request->user()->save();

        return Redirect::route('profile')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function passwordUpdate(Request $request): RedirectResponse
    {

        $request->validate([
            'old_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
        try {
            $user = auth()->user();
            if (Hash::check($request->old_password,$user->password)) {
                $user->password = Hash::make($request->password);
                $user->update();
                return \redirect()->route('profile')->with('success', 'Password Successfully Updated');
            }
            return \redirect()->back()->with('error', 'Invalid Credentials');
        }
        catch (\Throwable $e){
            return \redirect()->back()->with( 'error'.$e->getMessage().'Password Update Failed');
        }
    }

    public function uploadProfileImage(Request $request)
    {
        $user = Auth::user();
        if ($request->hasFile('profile_picture')) {
            $user->clearMediaCollection('profile_picture'); // Clear existing profile image
            $user->addMediaFromRequest('profile_picture')->toMediaCollection('profile_picture');
            return redirect()->back()->with('success', 'Profile Picture Successfully Updated');
        }
        return redirect()->back()->with('error', 'File not uploaded');
    }
//$project->addMedia($file)
//->usingName('project/'.$data['user_id'] )
//->toMediaCollection('project', 'public');


}
