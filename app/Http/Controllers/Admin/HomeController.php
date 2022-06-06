<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $reviews = Review::where('status', '=', 'new')->limit(10)->inRandomOrder()->get();
        $lastMessages = Message::where('status', '=', 'new')->limit(10)->inRandomOrder()->get();
        $dataMessage = Message::where('status', '=', 'read')->get();
        $dataUser = User::all();
        $dataProduct = Product::all();
        $dataOrder = Order::where('status', '=', 'completed')->get();
        return view('admin.index', ['datalist' => $dataOrder, 'datauser' => $dataUser, 'datamessage' => $dataMessage,
            'lastmessages' => $lastMessages,'dataproduct' => $dataProduct,'reviews'=>$reviews]);
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {

        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        } else {
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

}
