<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Visitors;
use App\Models\Book;
use App\Models\Cart;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthenController extends Controller
{
    //Registration
    public function registration()
    {
        return view('auth.register');
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email:users',
            'password'=>'required|min:8|max:12'
        ]);

        $user = new Visitors();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $result = $user->save();
        if($result){
            return back()->with('success','You have registered successfully.');
        } else {
            return back()->with('fail','Something wrong!');
        }
    }


    // REGISTRATION2 

    public function registerUser2(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email:users',
            'password'=>'required|min:8|max:12'
        ]);

        $user = new Student();
        $user->name = $request->name;
        $user->matno = $request->matno;
        $user->dept = $request->dept;
        $user->email = $request->email;
        $user->password = $request->password;

        
        $result = $user->save();
        if($result){
            return redirect('/')->with('success','Account created successffully!');
        } else {
            return back()->with('fail','Something wrong!');
        }
    }



    ////Login
    public function login()
    {
        return view('auth.login');
    }
    public function loginUser(Request $request)
    {
        $request->validate([            
            'matno'=>'required',
            'password'=>'required|min:8|max:12'
        ]);

        
        
        $Readers = Student::where('matno','=',$request->matno)->first();
        if($Readers){
            $Readers2 = Student::where('matno','=',$request->matno)->where('password','=',$request->password)->first();
            if($Readers2){
                $request->session()->put('loginId', $Readers->id);
                return redirect('/');
            }
            else {
                return back()->with('fail','Incorrect email or password!');
            }
        } else {
            return back()->with('fail','Incorrect email or password!');
        } 
    }

   
    //// Dashboard
    public function dashboard(Request $search)
    {
        // return "Welcome to your dashabord.";
        $data = array();
        if(Session::has('loginId')){
            $data = Visitors::where('id','=',Session::get('loginId'))->first();
            $carts = Cart::All(); 

            $search = $search->input('search');

            if($search){
                $books = Book::where('title', 'LIKE', "%{$search}%")->get();
            }else{
                $books = Book::limit(14)->orderBy('id', 'desc')->get();
            }
        }
        return view('dash',compact('data', 'books', 'carts'));
    }


    public function dashboardpost(Request $request)
    {
        
        $file = $request->file(key:"file");
        $destination = "uploads";

        if($file->move($destination, $file->getClientOriginalName())){
            echo 'success';
        }else{
            echo 'failed';
        }

        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->page = $request->page;
        $book->format = $request->format;
        $book->isbn = $request->isbn;
        $book->language = $request->language;
        $book->dimension = $request->dimension;
        $book->category = $request->category;
        $book->price = $request->price;
        $book->quantity = 1;
        $book->image = $file->getClientOriginalName();

        $result = $book->save();
        if($result){
            return back()->with('success','Book Uploaded Successfully!.');
        } else {
            return back()->with('fail','Something wrong!');
        }
    }


    ///Logout
    public function logout()
    {
        $data = array();
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
}