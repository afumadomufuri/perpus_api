<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'isbn', 'judul', 'pengarang', 'penerbit', 'tahun_terbit'
    ];

    public $timestamps = false;
}
