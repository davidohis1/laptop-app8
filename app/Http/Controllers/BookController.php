<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Cart;
use App\Models\Student;
use Illuminate\Support\Facades\Session;


class BookController extends Controller
{
    public function home(Request $search)
    {
        $data = Student::where('id','=',Session::get('loginId'))->first();

        $search = $search->input('search');

        if($search){
            $books = Book::where('title', 'LIKE', "%{$search}%")->get();
        }
        else{
            $books = Book::limit(4)->orderBy('id', 'desc')->get();
        }
        $books2 = Book::limit(4)->orderBy('id', 'asc')->get();
        return view('welcome', compact('books', 'data', 'books2'));
    }

    
    public function show($id)
    {
        if(Session::has('loginId')){
        $data = Student::where('id','=',Session::get('loginId'))->first();
        $carts = Cart::where('buyer','=',$data->matno)->get(); 
        $count = Cart::where('buyer','=',$data->matno)->count(); 

        $view = Book::where('id', $id)->first(); 
        $books = Book::limit(4)->orderBy('id', 'asc')->get(); 
        return view('show', compact('view','books', 'carts', 'count'));
        }else{
            return redirect('login');
        }
    }

    public function addtocart($id)
    {
        $data = Student::where('id','=',Session::get('loginId'))->first();
        $book = Book::where('id', $id)->first();
        $cart2 = Cart::where('bookid', $id)->where('buyer', '=' ,$data->matno)->first();

        if($cart2){
            $cart = Cart::where('bookid', $id)->first();
            $cart->title = $book->title;
            $cart->author = $book->author;
            $cart->page = $book->page;
            $cart->format = $book->format;
            $cart->isbn = $book->isbn;
            $cart->language = $book->language;
            $cart->dimension = $book->dimension;
            $cart->category = $book->category;
            $cart->price = $book->price;
            $cart->bookid = $book->id;
            $cart->image = $book->image;
            $cart->quantity += 1;
            $cart->buyer = $data->matno;
            $cart->status = 'pending';

            $result = $cart->update();
            if($result){
                return back()->with('success','Book successfully updated to cart!');
            } else {
                return back()->with('fail','Something wrong!');
            }
        }else{
            $cart = new Cart();

            $cart->title = $book->title;
            $cart->author = $book->author;
            $cart->page = $book->page;
            $cart->format = $book->format;
            $cart->isbn = $book->isbn;
            $cart->language = $book->language;
            $cart->dimension = $book->dimension;
            $cart->category = $book->category;
            $cart->price = $book->price;
            $cart->bookid = $book->id;
            $cart->image = $book->image;
            $cart->quantity = 1;
            $cart->buyer = $data->matno;
            $cart->status = 'pending';
            
            $result = $cart->save();
            if($result){
                return back()->with('success','Book successfully added to cart!');
            } else {
                return back()->with('fail','Something wrong!');
            }
        }       
    }

    public function clearcart($id)
    {
        $data = Student::where('id','=',Session::get('loginId'))->first();
        $book = Cart::where('bookid', $id)->first();

        if($book->quantity >1){
            $cart = Cart::where('bookid', $id)->first();
            $cart->title = $book->title;
            $cart->author = $book->author;
            $cart->page = $book->page;
            $cart->format = $book->format;
            $cart->isbn = $book->isbn;
            $cart->language = $book->language;
            $cart->dimension = $book->dimension;
            $cart->category = $book->category;
            $cart->price = $book->price;
            $cart->bookid = $book->id;
            $cart->image = $book->image;
            $cart->quantity -= 1;
            $cart->buyer = $data->matno;
            $cart->status = 'pending';

            $result = $cart->update();
            return back();
        }else{
            Cart::where('bookid', $id)->delete();
            return back();
        }
        
    }

}


// $book = Book::findOrFail($id);
        // $cart = session()->get('cart2', []);
        // $quantity = 1;

        // if(isset($cart[$id])){
        //     $cart[$id]['quantity']++;
        // }else{
        //     $cart[$id] = [
        //         "title" => $book->title,
        //         "author" => $book->author,
        //         "price" => $book->price,
        //         "page" => $book->page,
        //         "image" => $book->image,
        //         "format" => $book->format,
        //         "language" => $book->language,
        //         "dimension" => $book->dimension,
        //         "isbn" => $book->isbn,
        //         "category" => $book->category,
        //         "quantity" => $quantity,
        //      ];
        // } 



        // session()->put('cart2', $cart);
        // return redirect()->back()->with('success', 'book successfully added to cart!');