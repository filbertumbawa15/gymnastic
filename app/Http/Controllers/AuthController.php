<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        // Attempt to log in the user with the provided credentials
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Login successful
            return response()->json([
                'message' => 'Login successful',
                'redirect' => route('dashboard'),
            ]);
        }

        // Login failed (invalid credentials)
        return response()->json([
            'message' => 'Invalid email or password.',
        ], 401);
    }

    public function register()
    {
        return view('register');
    }

    public function register_form(Request $request)
    {
        try {
            DB::beginTransaction();
            $otp = rand(100000, 999999);
            $valueUUID = Str::uuid();

            $data = [
                'uuid' => $valueUUID,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => 3,
                'otp' => $otp,
            ];

            $user = (new User())->processStore($data);


            // Send OTP via email
            Mail::raw("Your OTP is: $otp", function ($message) use ($user) {
                $message->to($user->email)->subject('Verify Your Account');
            });

            DB::commit();

            return response()->json([
                'message' => 'Verify the OTP',
                'uuid' => $valueUUID,
            ]);
        } catch (\Throwable $th) {
            throw $th;
            DB::rollBack();
        }
    }

    public function showOtpForm()
    {
        return view('otp');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'otp' => 'required|digits:6',
        ]);

        $user = User::where('uuid', $request->id)->where('otp', $request->otp)->exists();
        if ($user == false) {
            return response()->json([
                'message' => 'Invalid OTP',
                'uuid' => $request->otp,
            ], 422);
        } else {
            User::where('uuid', $request->id)->update(['is_verified' => true, 'otp' => null]);
            return response()->json([
                'message' => 'Success',
                'uuid' => $request->otp,
            ], 200);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('landingpage');
    }
}
