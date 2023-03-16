@extends('pages.main')

@section('content')


<div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="card">
          <div class="card-body">
            <h4 class="text-center mb-4" class="btn-md btn-primary">Tambah Properti</h4>

    <form action="/products" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama-produk" class="form-label">Nama Properti</label>
				<input type="text" name="namaproduk" id="namaproduk" class="form-control" required>
          @error('namaproduk')
		      <small class="text-danger">{{ $message }}</small>
	      @enderror
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Properti</label>
            <textarea rows="5" name="deskripsi" id="deskripsi" class="form-control" required></textarea>
            @error('deskripsi')
		      <small class="text-danger">{{ $message }}</small>
	        @enderror
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga Properti</label>
			<input type="number" name="harga" id="harga" class="form-control" required>
            @error('harga')
		      <small class="text-danger">{{ $message }}</small>
	        @enderror
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Properti</label>
			<input type="file" name="gambar" id="gambar" class="form-control" required>
            @error('gambar')
		      <small class="text-danger">{{ $message }}</small>
	        @enderror
        </div>
        <div class="d-grid gap-2">
            <button type="submit" name="simpan" class="btn btn-md btn-primary">Simpan</button>
        </div>
    </form>
</div>
        </div>
      </div>
    </div>
  </div>


@endsection