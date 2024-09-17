<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\DesignerCompany;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class PasswordController extends Controller
{
    public function showSetPasswordForm(Request $request, $token)
    {
        $admin = Admin::where('email', $request->email)->where('reset_token', $token)->first();

        if (!$admin) {
            return redirect()->route('home')->withErrors(['error' => 'Invalid or expired token.']);
        }

        return view('auth.setpassword', ['token' => $token, 'email' => $request->email]);
    }

    public function setPassword(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => 'required|min:8|confirmed',
            'token' => 'required',
            'email' => 'required|email'
        ]);

        try {
            $admin = Admin::where('email', $request->email)->firstOrFail();


            $adminType = $admin->adminType;
            if ($adminType->admin_type_name == 'Designer') {
                $company = DesignerCompany::where('admin_ID', $admin->admin_ID)->firstOrFail();
                $company->update(['is_verified' => true]);
            }

            $admin->update([
                'password' => Hash::make($request->password),
                'is_verified' => true,
                'reset_token' => null,
            ]);
            $admin->save();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('login')->with('message', 'Password set successfully. You can now log in.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to set password.']);
        }
    }
}
