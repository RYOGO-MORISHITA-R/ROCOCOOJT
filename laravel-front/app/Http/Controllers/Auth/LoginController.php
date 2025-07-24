<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
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


    public function showCustomLoginForm()
    {
        $template = DB::table('templates')
            ->leftJoin('users', 'templates.userId', '=', 'users.id')
            ->leftJoin('csses', 'templates.cssId', '=', 'csses.cssId')
            ->leftJoin('javascripts', 'templates.jsId', '=', 'javascripts.jsId')
            ->select(
                'templates.tmphtml',
                'csses.cssContent',
                'javascripts.jsContent'
            )
            ->where('templates.tmpcode', '10001')
            ->first();

        // テンプレートが見つからなければ空にする
        $tmphtml = $template->tmphtml ?? '';
        $cssContent = $template->cssContent ?? '';
        $jsContent = $template->jsContent ?? '';

        return view('login', compact('tmphtml', 'cssContent', 'jsContent'));
    }

}
