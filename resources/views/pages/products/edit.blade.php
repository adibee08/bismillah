@extends('pages.main')

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="card">
          <div class="card-body">
            <h4 class="text-center mb-4">Edit Produk</h4>

            <form action="/products/{{ $tampil->id }}" method="POST" enctype="multipart/form-data">
                @method("put")
                @csrf
                    <div class="mb-3">
                        <label for="namaproduk" class="form-label">Nama Properti</label>
                        <input type="text" name="namaproduk" id="namaproduk" value="{{ $tampil->namaproduk }}" class="form-control" required>
                        @error('namaproduk')
			            <small class="text-danger">{{ $message }}</small>
	                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deksripsi" class="form-label">Deskripsi</label>
                        <textarea rows="5" name="deskripsi" id="deskripsi" class="form-control" required>{{ $tampil->deskripsi }}</textarea>                        @error('deskripsi')
                              <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" name="harga" id="harga" value="{{ $tampil->harga }}" class="form-control" required>
                        @error('harga')
                              <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <form action="/products" method="post">
                        @csrf
                        <div class="d-grid gap-2">
                            <button type="submit" name="edit" class="btn btn-md btn-primary">Edit</button>
                        </div>
                    </form>
                    
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection