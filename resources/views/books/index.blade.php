<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <a href="{{ route('books.create') }}" class="btn btn-primary justify-content-end">Tambah Buku</a>

</x-app>
