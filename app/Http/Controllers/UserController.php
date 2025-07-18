<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\createUser;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Redirect;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showLogin(){
        return view('login');
    }
    public function showRegister(){
        return view('register');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createUser(createUser $request)
    {
        try{
            $validatedData = $request->safe()->except(['password_confirmation']);
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
                'role' => 'user', // Default role is 'user'
                'email_verified_at' => null, // Not verified by default
                'created_at' => now(),
                'updated_at' => now(),
                'active' => true, // Assuming Active is a boolean field
            ]);

            $user->save();
            FacadesAuth::login($user); // Automatically log in the user after registration
            event(new Registered($user)); // Trigger the Registered event
            // Simulating user creation success
            return Redirect::route('verification.notice')
            ->with('success', 'User created successfully. Please verify your email.');
        }catch(\Throwable $e){
            // return Redirect::back()->withErrors(['error' => 'An error occurred while creating the user.']);
            dd([
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
            ]);
        }
    }
    public function login(Request $request){
        try{
            $validatedData = $request->validate([
                'email' => 'required|email',
                'password' => 'required|string|min:6|max:255'
            ]);
            $user = User::where('email', $validatedData['email'])->first();
            if (!$user) {
                return Redirect::back()->withErrors(['error' => 'User not found.']);
            }
            else{
                if (FacadesAuth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password'], 'active' => true])) {
                    // Authentication passed...
                    if ($user->email_verified_at) {
                        return Redirect::route('dashboard')->with('success', 'Login successful.');
                    } else {
                        return Redirect::route('verification.notice')->with('warning', 'Please verify your email before logging in.');
                    }
                } else {
                    return Redirect::back()->withErrors(['error' => 'Invalid credentials.']);
                }
            }
        }catch(\Throwable $e){
            // return Redirect::back()->withErrors(['error' => 'An error occurred while logging in.']);
            dd([
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
            ]);

        }
    }
    public function logout(Request $request)
    {
        try {
            FacadesAuth::logout(); // Cierra la sesión actual del usuario.
        
            // Invalida la sesión y regenera el token CSRF para mayor seguridad.
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        
            return Redirect::route('login')->with('success', 'You have been logged out.');
        } catch (\Throwable $e) {
            dd([
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
