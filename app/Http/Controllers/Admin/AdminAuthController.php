<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Models\Placement;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AdminAuthController extends Controller
{
    /**
     * Show the login page.
     */
    public function login()
    {
        return view('admin.auth.login');
    }

    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle the Google callback.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // ✅ Check MSU staff email
            if (! str_ends_with($googleUser->email, '@staff.msu.ac.zw')) {
                return redirect()->route('login')
                    ->with('error', 'Only MSU staff emails (@staff.msu.ac.zw) are allowed to access this system.');
            }

            // ✅ Find user
            $user = User::where('email', $googleUser->email)->first();

            if (! $user) {
                // User not found, create and assign Admin role
                $user = User::create([
                    'name'      => $googleUser->name,
                    'email'     => $googleUser->email,
                    'password'  => bcrypt(\Str::random(16)), // random password
                    'google_id' => $googleUser->id,
                    'avatar'    => $googleUser->avatar,
                    'active'    => true,
                ]);

            }

            // ✅ Update user info
            $user->update([
                'name'      => $googleUser->name,
                'google_id' => $googleUser->id,
                'avatar'    => $googleUser->avatar,
            ]);

            // ✅ Login
            Auth::login($user);

            return redirect()->route('admin.dash');

        } catch (\Exception $e) {
            return redirect()->route('$request->session()->invalidate();login')
                ->with('error', 'An error occurred during authentication. Please try again.');
        }
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'You have been logged out successfully.');
    }
}
