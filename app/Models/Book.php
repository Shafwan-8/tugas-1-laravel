<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'judul',
    'penulis',
    'penerbit',
    'tahun_terbit',
    'stok',
    'kategori'
])]

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;
}
