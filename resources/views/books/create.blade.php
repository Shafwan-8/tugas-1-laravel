<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('books.index') }}" class="btn btn-primary">Kembali</a>
    </div>

    <div class="card border-1 bordered shadow-sm mt-3">
        <div class="card-body">
            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                <div class="d-flex flex-row gap-3 justify-content-between mb-3">
                    <div class="mb-3 w-100">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                            name="judul" value="{{ old('judul') }}">

                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 w-100">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis"
                            name="penulis" value="{{ old('penulis') }}">

                        @error('penulis')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex flex-row gap-3 justify-content-between mb-3">
                    <div class="mb-3 w-100">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input type="text" class="form-control @error('penerbit') is-invalid @enderror"
                            id="penerbit" name="penerbit" value="{{ old('penerbit') }}">

                        @error('penerbit')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                        <input type="number" class="form-control @error('tahun_terbit') is-invalid @enderror"
                            id="tahun_terbit" name="tahun_terbit" min="1900" value="{{ old('tahun_terbit') }}">

                        @error('tahun_terbit')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex flex-row gap-3 justify-content-between mb-3">
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok"
                            name="stok" min="0" value="{{ old('stok', 0) }}">
                        @error('stok')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 w-100">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input type="text" class="form-control @error('kategori') is-invalid @enderror"
                            id="kategori" name="kategori" value="{{ old('kategori') }}">

                        @error('kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
    </form>
</x-app>
