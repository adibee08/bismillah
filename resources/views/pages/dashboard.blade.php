@extends('pages.main')

@section('content')

<h4 class="text-center mb-5">Selamat datang di halaman dashboard</h4>


   
    <div class="row">
        <div class="col-12">
          <p class="text">Jumlah Data Properti</p>
          <div class="card">
            <div class="card-body">
              <h5>{{ $total }}</h5>
              <span>Properti</span>
            </div>
          </div>
        </div>
      </div>
    

@endsection