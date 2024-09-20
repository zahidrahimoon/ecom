<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Admin;
use App\Models\Driver;

class AuthController extends Controller
{
    // Show Login Form for User
    public function showLoginForm()
    {
        return view('auth.login'); // Adjust the path if needed
    }

    // Handle User Login
    public function login(Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Attempt to log the user in
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/');
        }

        return redirect()->back()
            ->withErrors(['email' => 'The provided credentials do not match our records.'])
            ->withInput($request->except('password'));
    }

    // Show Admin Login Form
    public function showAdminLoginForm()
    {
        return view('auth.admin-login'); // Create a separate view for admin login if needed
    }

    // Handle Admin Login
// Handle Admin Login
public function adminLogin(Request $request)
{
    // Validate the incoming request
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required|min:8',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    // Use Auth::guard('admin') to attempt login
    if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
        return redirect()->intended('/admin/dashboard');
    }

    return redirect()->back()
        ->withErrors(['email' => 'The provided credentials do not match our records.'])
        ->withInput($request->except('password'));

}

    // Show Driver Login Form
    public function showDriverLoginForm()
    {
        return view('auth.driver-login'); // Create a separate view for driver login if needed
    }

    // Handle Driver Login
    public function driverLogin(Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Attempt to log the driver in
        if (Auth::guard('driver')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/driver/dashboard'); // Adjust the redirect path as needed
        }

        return redirect()->back()
            ->withErrors(['email' => 'The provided credentials do not match our records.'])
            ->withInput($request->except('password'));
    }

    // Show Signup Form
    public function showSignupForm()
    {
        return view('auth.signup'); // Adjust the path if needed
    }

    // Handle User Signup
    public function signUp(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // Ensure password confirmation field is included
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create the user
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful!');
    }


}


?>
