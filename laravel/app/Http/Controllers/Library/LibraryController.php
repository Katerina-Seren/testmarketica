<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Library\Controller;
use App\Models\Library\Author;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    //отображение авторов с их книгами
    public function index()
    {
        $authors = (new Author)->getAllAuthorsWithBooks();

        return view('library.index', compact('authors'));
    }
}
