<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminController extends Controller
{
    public function create(){
return view('auth.register');
    }
    public function store(Request $req){
        $validated = $req->validate([
'admin_name'=>'required|string',
'admin_password'=>'required|string|min:6'
        ]);
        $validated['admin_password']=bcrypt($validated['admin_password']);
        $register=Admin::create($validated);
        return redirect()->route('login')->with('success','register successful');
    }

public function showLogin(){
return view('auth.login');
}

public function login(Request $req){
$credentials=$req->validate([
'admin_name'=>'required',
'admin_password'=>'required'
]);

$admin=Admin::where('admin_name',$credentials['admin_name'])->first();
if(!$admin){
    return back()->withErrors([
'admin_name'=>'admin name not found'
    ]);
}
if(!password_verify($credentials['admin_password'],$admin->admin_password)){
return back()->withErrors([
    'admin_password'=>'incorrect password'
]);}
//session set
session(
    [
        'admin_name'=>$admin->admin_name,
        'admin_id'=>$admin->admin_id
        ]
);

return redirect()->route('candidate.index')->with('success','login successful');

}
public function logout(){
    session()->flush();
    return redirect('/');
}
}
