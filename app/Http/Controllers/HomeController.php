<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\CategoryController;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public static function categoryList(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getsetting(){
        return Setting::first();
    }

    public function index()
    {
        $setting = Setting::first();
        return view('home.index',['setting'=>$setting]);
    }

    public function aboutus()
    {
        return view('home.index');
    }

    public function references()
    {
        return view('home.index');
    }

    public function fag()
    {
        return view('home.index');
    }

    public function contact()
    {
        return view('home.index');
    }

    public function login(){

        return view('home.index');
    }

    public function logincheck(Request $request)
    {

        if ($request->isMethod('post')){
            $credentials = $request->only('email','password');
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('home');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else{
            return view('admin.login');
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }













}
