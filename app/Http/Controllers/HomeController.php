<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\CategoryController;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Product;
use App\Models\Image;
use App\Models\Message;
use MongoDB\Driver\Session;
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
        $slider = Product::select('id','title', 'image', 'price','slug')->limit(4)->get();
        $daily = Product::select('id','title', 'image', 'price','slug')->limit(3)->inRandomOrder()->get();
        $last = Product::select('id','title', 'image', 'price','slug')->limit(3)->orderByDesc('id')->get();
        $picked = Product::select('id','title', 'image', 'price','slug')->limit(3)->inRandomOrder()->get();

        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'daily' => $daily,
            'picked' => $picked,
            'last' => $last,
            'page' => 'home'
        ];
        return view('home.index',$data);
    }

    public function addtocart($id)
    {
        echo "Add to CART";
        $data = Product::find($id);
        print_r($data);
        exit();
    }

    public function product($id,$slug)
    {
        $data = Product::find($id);
        $datalist = Image::where('product_id',$id)->get();
        return view('home.product_detail',['data'=>$data,'datalist'=>$datalist]);
    }

    public function categoryproducts($id,$slug)
    {
        $datalist = Product::where('category_id',$id)->get();
        $data = Category::find($id);
        #print_r($data);
        #exit();
        return view('home.category_products',['data'=>$data,'datalist'=>$datalist]);
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references',['setting'=>$setting]);
    }

    public function fag()
    {
        return view('home._blank');
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');

        $data->save();

        return redirect()->route('contact')->with('info','Mesajınız Kaydedilmiştir. Teşekkürler !');

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

        return redirect('');
    }













}
