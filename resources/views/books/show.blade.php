<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('books.index') }}" class="btn btn-primary">Kembali</a>
    </div>

    <div class="card border-1 bordered shadow-sm mt-3">
        <div class="card-body">
            <h5 class="card-title">Judul: {{ $book->judul }}</h5>
            <p class="card-text">Penulis: {{ $book->penulis }}</p>
            <p class="card-text">Penerbit: {{ $book->penerbit }}</p>
            <p class="card-text">Tahun Terbit: {{ $book->tahun_terbit }}</p>
            <p class="card-text">Stok: {{ $book->stok }}</p>
            <p class="card-text">Kategori: {{ $book->kategori }}</p>
        </div>
    </div>

</x-app>
