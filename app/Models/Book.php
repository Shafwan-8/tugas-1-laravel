<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable as AttributesFillable;
use Illuminate\Database\Eloquent\Factories\Fillable as FactoryFillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[FactoryFillable([
    'judul',
    'penulis',
    'penerbit',
    'tahun_terbit',
    'stok',
    'kategori'
])]

#[AttributesFillable([
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
