<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {   
        //$input = $request->all();

        $this->validate($request, [
            // 'email' => 'required|email',
            'hp' => 'required|string',
            'password' => 'required',
        ]);
        //untuk override agar bisa login dengan email dan no hp
        $loginType = filter_var($request->hp, FILTER_VALIDATE_EMAIL) ? 'email' : 'hp';
        $login = [
            $loginType => $request->hp,
            'password' => $request->password
        ];
        //mengarahkan user level ke halaman masing disini admin adalah seller dan user adalah buyer
        // if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        if (auth()->attempt($login))
        {
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin.home');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email/HP And Password Are Wrong.');
        }
    }
}
