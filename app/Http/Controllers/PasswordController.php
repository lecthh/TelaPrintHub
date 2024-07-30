<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\DesignerCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class PasswordController extends Controller
{
    public function showSetPasswordForm(Request $request, $token)
    {
        return view('auth.setpassword', ['token' => $token, 'email' => $request->email]);
    }

    public function setPassword(Request $request)
    {
        Log::info('Set Password Request', $request->all());

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
            ]);

            return redirect()->route('login')->with('message', 'Password set successfully. You can now log in.');
        } catch (\Exception $e) {
            Log::error('Error setting password', ['error' => $e->getMessage()]);
            return redirect()->back()->withErrors(['error' => 'Failed to set password.']);
        }
    }
}
