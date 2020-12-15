<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;

class HomeController extends Controller
{

    /**
     * Show the application main page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        $authors = Author::all();

        if ($books->isEmpty()) {
            $books = null;
        }
        if ($authors->isEmpty()) {
            $authors = null;
        }

        return view('main', ['books' => $books, 'authors' => $authors ]);
    }
}
