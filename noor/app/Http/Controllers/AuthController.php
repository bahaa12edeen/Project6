<?php
  
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
// use Hash;
  
class AuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }  

    public function registration()
    {
        return view('auth.registration');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            // 'first_name' => 'required',
            // 'last_name' => 'required',
            'email' => 'required',
            // 'phone_number' => 'required',
            //'city' => 'required',
            //'address' => 'required,
            'password' => 'required',
            //'password_confirmation' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function postRegistration(Request $request)
    {  
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            // 'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|min:10',
            'city' => 'required',
            'address' => 'required',
            'password' => 'required|min:8|regex:/^[a-zA-Z0-9!$#%]+$/',
            'password_confirmation' =>'required|min:8|regex:/^[a-zA-Z0-9!$#%]+$/',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function create(array $data)
    {
        return User::create([
        'first_name' => $data['first_name'],
        'last_name' => $data['last_name'],
        // 'name' => $data['name'],
        'email' => $data['email'],
        'phone_number' =>$data['phone_number'],
        'city' =>$data['city'],
        'address' =>$data['address'],
        'password' => ($data['password']),
        'password_confirmation' => ($data['password_confirmation'])
        ]);
    }

    // public function logout() {
    //     Session::flush();
    //     Auth::logout();
    //     return Redirect('login');
    // }
}