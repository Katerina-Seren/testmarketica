<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'title',
        'description',
        'slug'
    ];

    /**
     * Получение списка с пагинацией
     *
     * @param null $currentPage
     * @param int $perPage
     * @return mixed
     */
    public function getAllBooksWithAuthors($currentPage = null, $perPage = 10)
    {
        $data = self::orderBy('created_at', 'desc')->paginate($perPage);
        $data->map(function($book) {
            return $book->authors;
        });

        return $data;
    }

    /**
     * Получение списка книг для api
     * @return Book[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection
     */
    public function getListforApi()
    {
        $books = Book::all();

        $books = $books->map(function($book){
            $data['id'] = $book->id;
            $data['title'] = $book->title;
            $data['description'] = $book->description;
            $data['slug'] = $book->slug;

            $data['author'] = null;
            foreach ($book->author as $author) {
                $data['author'][$author->id]['id'] = $author->id;
                $data['author'][$author->id]['name'] = $author->name;
                $data['author'][$author->id]['surname'] = $author->surname;
            }

            return collect($data);
        });

        return $books;
    }

    /**
     * Define Many-to-Mane relationships with Author Model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function author()
    {
        return $this->belongsToMany('App\Author');
    }

}
