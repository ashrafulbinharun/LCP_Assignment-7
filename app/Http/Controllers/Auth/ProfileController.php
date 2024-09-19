<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('auth.profile');
    }

    public function edit()
    {
        $user = DB::table('users')
            ->where('id', auth()->user()->id)
            ->first();

        return view('auth.edit-profile', compact('user'));
    }

    public function update(UpdateUserRequest $request)
    {
        $validated = $request->validated();

        DB::table('users')
            ->where('id', auth()->user()->id)
            ->update([
                'name' => $validated['name'],
                'username' => $validated['username'],
                'password' => Hash::make($validated['password']),
                'bio' => $validated['bio'],
                'updated_at' => Carbon::now(),
            ]);

        return to_route('profiles.index')->with(['success' => 'Profile Updated Successful.']);
    }
}
