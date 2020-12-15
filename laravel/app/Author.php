<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    protected $fillable = [
        'name',
        'surname',
        'slug'
    ];
    //
    public function getAllAuthorsWithBooks($withPaginate = false, $currentPage = null, $perPage = 10)
    {
        $data = self::orderBy('created_at', 'desc')->paginate($perPage);
        $data->map(function($author) {
            return $author->books;
        });

        return $data;
    }

    /**
     * Prevent Eloquent for accessing this fields
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    /**
     * Define Many-to-Many relationships with Book Model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function books()
    {
        return $this->belongsToMany('App\Book');
    }
}
