<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'category' => 'required|in:sports,history,drama',
        ]);

        Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
            'category' => $request->category,
        ]);

        session()->flash('success', 'The Book stored successfully.');
        return back();
    }
    
    public function destroy($id) {
        $book = Book::findOrfail($id);
        
        $book->delete();
        
        session()->flash('success', 'The Book deleted successfully.');
        return back();
    }
    
    public function edit($id) {
        $book = Book::findOrfail($id);
        
        return view('edit-book', [
            'book' => $book
            ]);
        }
        
    public function update(Request $request, $id) {
        $book = Book::findOrfail($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'category' => 'required|in:sports,history,drama',
        ]);

        $book->update([
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
            'category' => $request->category,
        ]);

        session()->flash('success', 'The Book updated successfully.');
        return redirect()->route('home');
    }
}
