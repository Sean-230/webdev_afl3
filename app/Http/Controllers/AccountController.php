<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Review;

class AccountController extends Controller
{
    public function showChangePassword()
    {
        return view('user.change-password');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (! $user instanceof User) {
            return back()->withErrors(['user' => 'Authenticated user not found.']);
        }

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('home')->with('success', 'Password changed successfully!');
    }

    public function deleteAccount(Request $request)
    {
        $request->validate([
            'password' => 'required',
        ]);
        
        $user = Auth::user();

        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Password is incorrect.']);
        }

        // Delete user's cart items and cart
        if ($user->cart) {
            $user->cart->items()->delete();
            $user->cart->delete();
        }

        // Delete user's reviews
        Review::where('user_id', $user->id)->delete();

        // Logout and delete user
        Auth::logout();
        User::destroy($user->id);

        return redirect()->route('home')->with('success', 'Your account has been deleted successfully.');
    }
}
