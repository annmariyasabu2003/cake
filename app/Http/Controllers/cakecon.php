<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cake;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class cakecon extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function registeration(Request $request){
        $validatedData = $request->validate([
            'name'=> 'required',
            'email' => 'required|unique:users|max:255|email',
            'password'=> 'required',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'pincode'=> 'required|digits:6',
            'phone'=> 'required|digits:10'
        ]);
    
        
             User::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=> bcrypt($request->password), 
                'address'=> $request->address,
                'city'=> $request->city,
                'state'=> $request->state,
                'pincode'=> $request->pincode,
                'phone'=> $request->phone
            ]);
    
       
    
        return redirect('login');
    }
    
    public function loginpost(Request $request){

        $credentials=$request->validate([
            'email'=>['required','email'],
            'password'=> ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            session(['id' =>Auth::id()]);
            session(['name' =>Auth::user()->name]);
 
            return redirect()->intended('home');
        }
 
        return back()->with('error','The provided credentials do not match our records.',)->onlyInput('email');
        
    }

    public function home(){
        return view('index_home');
    }

    public function cake(){

        $prod = cake::all();
        return view('cakes', compact('prod'));
        
    }

    public function product(){
        return view('prod');

    }

    public function uploadFile(Request $request)
{

    if ($request->file('files')) {
           
        $filePath = $request->file('files')->store('uploads', 'public');

        cake::create([
            'name' => $request->name,
        'price' => $request->price,
            'path' => $filePath
        ]);

        return redirect('product');
    }
   

       
    
}

    
    public function logouts(Request $request){
        Auth::logout();
        $request->session()->flush();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
        return redirect('view')->with('success','successfully loggedout');
    }
    public function profile(){
        return view('profile');
    }

    public function view()
    {
        $items = cake::all();
        return view('view', compact('items')); 

    }

    // Edit an item
    public function edit($id)
    {
        $item = cake::findOrFail($id);
        return view('edit', compact('item'));
    }

    // Update an item
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $item = cake::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('view')->with('success', 'Item updated successfully');
    }

    // Delete an item
    public function destroy($id)
    {
        $item = cake::findOrFail($id);
        $item->delete();

        return redirect()->route('view')->with('success', 'Item deleted successfully');
    
    
}


}


