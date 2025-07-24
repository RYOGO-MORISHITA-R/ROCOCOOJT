<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showCustomLoginForm()
    {
        return view('login');
    }

    public function customLogin(Request $request)
    {
        $credentials = $request->only('loginid', 'loginpassword');

        if (Auth::attempt(['email' => $credentials['loginid'], 'password' => $credentials['loginpassword']])) {
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'loginerror' => 'ログインIDまたはパスワードが正しくありません。',
        ])->withInput();
    }
}
