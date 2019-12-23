<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('welcome');
    }
    
    public function books() {
        return view('books', [
            'books' => \App\Book::all()
        ]);
    }

    public function search(Request $request) {
        $books = \App\Book::where('title', 'LIKE', '%' . $request->search . '%')
            ->orWhere('description', 'LIKE', '%' . $request->search . '%')
            ->orWhere('author', 'LIKE', '%' . $request->search . '%')->get();

        return view('books', [
            'search' => $request->search,
            'books' => $books
        ]);
    }
}
