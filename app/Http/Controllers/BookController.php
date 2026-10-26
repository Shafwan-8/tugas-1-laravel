<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('books.index', [
            'title' => 'Daftar Buku',
            'books' => Book::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create', [
            'title' => 'Tambah Buku',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|digits:4|integer',
            'stok' => 'required|integer|min:0',
            'kategori' => 'required',
        ],
        [
            'judul.required' => 'Judul buku harus diisi.',
            'penulis.required' => 'Nama penulis harus diisi.',
            'penerbit.required' => 'Nama penerbit harus diisi.',
            'tahun_terbit.required' => 'Tahun terbit harus diisi.',
            'tahun_terbit.digits' => 'Tahun terbit harus terdiri dari 4 digit.',
            'tahun_terbit.integer' => 'Tahun terbit harus berupa angka.',
            'stok.required' => 'Stok buku harus diisi.',
            'stok.integer' => 'Stok buku harus berupa angka.',
            'stok.min' => 'Stok buku tidak boleh kurang dari 0.',
            'kategori.required' => 'Kategori buku harus diisi.',
        ]);

        Book::create($validatedData);

        return to_route('books.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', [
            'title' => 'Detail Buku',
            'book' => $book,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', [
            'title' => 'Edit Buku',
            'book' => $book,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|digits:4|integer',
            'stok' => 'required|integer|min:0',
            'kategori' => 'required',
        ],
        [
            'judul.required' => 'Judul buku harus diisi.',
            'penulis.required' => 'Nama penulis harus diisi.',
            'penerbit.required' => 'Nama penerbit harus diisi.',
            'tahun_terbit.required' => 'Tahun terbit harus diisi.',
            'tahun_terbit.digits' => 'Tahun terbit harus terdiri dari 4 digit.',
            'tahun_terbit.integer' => 'Tahun terbit harus berupa angka.',
            'stok.required' => 'Stok buku harus diisi.',
            'stok.integer' => 'Stok buku harus berupa angka.',
            'stok.min' => 'Stok buku tidak boleh kurang dari 0.',
            'kategori.required' => 'Kategori buku harus diisi.',
        ]);

        $book->update($validatedData);

        return to_route('books.index')->with('success', 'Buku berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        
    }
}
