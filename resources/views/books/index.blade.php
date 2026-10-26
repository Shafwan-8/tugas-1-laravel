<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>


    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('books.create') }}" class="btn btn-primary">Tambah Buku</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill me-2" aria-hidden="true"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card border-1 bordered shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="text-center">#</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th class="text-center">Tahun Terbit</th>
                        <th class="text-center">Stok</th>
                        <th>Kategori</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <th class="text-center">{{ $loop->iteration }}</th>
                            <td>{{ $book->judul }}</td>
                            <td>{{ $book->penulis }}</td>
                            <td>{{ $book->penerbit }}</td>
                            <td class="text-center">{{ $book->tahun_terbit }}</td>
                            <td class="text-center">{{ $book->stok }}</td>
                            <td>{{ $book->kategori }}</td>
                            <td class="text-center text-nowrap">
                                <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-warning"
                                    role="button" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <a href="{{ route('books.show', $book) }}" class="btn btn-sm btn-info" role="button"
                                    title="Detail">
                                    <i class="bi bi-eye"></i>
                                </a>

                                <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" title="Hapus"
                                        onclick="return confirm('Are you sure?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app>
