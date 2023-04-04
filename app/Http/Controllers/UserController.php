<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Else_;
use Illuminate\Support\Facades\View;
use PhpParser\Node\Stmt\Return_;

class UserController extends Controller
{

    public function showlogin()
    {
        return View('login');
    }

    public function attempt(Request $request)
    {
        dd($request->all());
    }
    public function showregister()
    {
        return View('register');
    }

    public function login(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::check()) {
                if (Auth::user()->role == 1) {
                    $videos = video::all();
                    return View('list-video', compact('videos'))->with('messsages', 'ADMIN');
                } else {
                    $videos = video::all();
                    return view('index',compact('videos'));
                }
            }
        } else {
            return redirect()
                ->route('login')
                ->with('message', 'Invalid username or password!');
        }
    }




    public function register(Request  $request)
    {
        if ($request->isMethod('POST')) {
            $user = DB::table('users')->where('email', $request->email)->first();
            if (!$user) {
                $newUser = new User();
                $newUser->name = $request->name;
                $newUser->email = $request->email;
                $newUser->password = $request->password;
                $newUser->role = $request->role == 2;
                $newUser->save();
                return redirect()->route('login')->with('message', 'create account success!');
            } else {
                return redirect()->route('login')->with('message', 'Email exist!');
                return View('showlogin');
            }
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
