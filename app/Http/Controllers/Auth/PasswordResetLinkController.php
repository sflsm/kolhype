<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PasswordResetLinkController extends Controller
{
    /**
     * Tampilkan form lupa password
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Kirim email reset password
     */
    public function store(Request $request): RedirectResponse
{
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    if ($status === Password::RESET_LINK_SENT) {
        return back()->with('status', 'Link reset password berhasil dikirim ke email.');
    }

    return back()->withErrors(['email' => 'Gagal mengirim link reset password.']);
}
}
