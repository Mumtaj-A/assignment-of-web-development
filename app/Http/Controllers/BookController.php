<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'no_of_books' => 'required|integer',
            'price_of_book' => 'required|numeric',
            'pic_of_author' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
        ]);

        $fileName = null;
        if ($request->hasFile('pic_of_author')) {
            $fileName = time().'_'.$request->pic_of_author->getClientOriginalName();
            $request->pic_of_author->move(public_path('uploads'), $fileName);
        }

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'no_of_books' => $request->no_of_books,
            'price_of_book' => $request->price_of_book,
            'pic_of_author' => $fileName
        ]);

        return redirect()->route('books.index')->with('success','Book Record Added Successfully!');
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'no_of_books' => 'required|integer',
            'price_of_book' => 'required|numeric',
            'pic_of_author' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
        ]);

        $fileName = $book->pic_of_author;
        if ($request->hasFile('pic_of_author')) {
            $fileName = time().'_'.$request->pic_of_author->getClientOriginalName();
            $request->pic_of_author->move(public_path('uploads'), $fileName);
        }

        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'no_of_books' => $request->no_of_books,
            'price_of_book' => $request->price_of_book,
            'pic_of_author' => $fileName
        ]);

        return redirect()->route('books.index')->with('success','Book Record Updated Successfully!');
    }

    public function destroy(Book $book)
    {
        if ($book->pic_of_author && file_exists(public_path('uploads/'.$book->pic_of_author))) {
            unlink(public_path('uploads/'.$book->pic_of_author));
        }
        $book->delete();
        return redirect()->route('books.index')->with('success','Book Record Deleted Successfully!');
    }
}
