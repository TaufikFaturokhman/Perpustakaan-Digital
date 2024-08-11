<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create() {
        return view('books.create');
    }

    public function store(Request $request) {
        $book = new Book();
        $book->title = $request->title;
        $book->category = $request->category;
        $book->description = $request->description;
        $book->quantity = $request->quantity;

        if ($request->hasFile('book_file')) {
            $book->file_path = $request->book_file->store('books');
        }

        if ($request->hasFile('cover_image')) {
            $book->cover_image_path = $request->cover_image->store('covers');
        }

        $book->save();

        return redirect()->route('books.index');
    }

    public function edit($id) {
        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id) {
        $book = Book::find($id);
        $book->title = $request->title;
        $book->category = $request->category;
        $book->description = $request->description;
        $book->quantity = $request->quantity;

        if ($request->hasFile('book_file')) {
            $book->file_path = $request->book_file->store('books');
        }

        if ($request->hasFile('cover_image')) {
            $book->cover_image_path = $request->cover_image->store('covers');
        }

        $book->save();

        return redirect()->route('books.index');
    }

    public function destroy($id) {
        $book = Book::find($id);
        $book->delete();

        return redirect()->route('books.index');
    }
}

