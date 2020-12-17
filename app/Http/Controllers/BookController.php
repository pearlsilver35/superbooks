<?php

namespace App\Http\Controllers;
use App\Models\Book;
// use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;

class BookController extends Controller
{
    public function index(Request $request){
        
        $books = Book::where('status', $request->query('status', 1))->get();

        return view('book.index', compact('books'));
    }

    public function create(){
        
        $book = new Book();
        return view('book.create', compact('book'));
        
    }

    public function store(){

        $book = Book::create($this->validatedData());
        // Mail::to($book->email)->send(new WelcomeMail());
        return redirect('/books/'.$book->id);
        
    }

    public function show(Book $book){
        
        return view('book.show', compact('book'));
    }

    public function edit(Book $book){
        
        return view('book.edit', compact('book'));
    }

    public function update(Book $book){
        
       $book->update($this->validatedData());
        
        return redirect('/books');
    }
    
    public function destroy(Book $book){
        $book->delete();
        return redirect('/books');
    }

    protected function validatedData(){

       return request()->validate([
            'name' => 'required | min:5',
            'description' => 'required | min:5',
        ]);
    }
}
