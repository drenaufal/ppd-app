@extends('layout.mainlayout')
@section('content')

@if($message = Session::get('berhasil'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
 {{ $message }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    
<div class="col-lg-9">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data</h1>
  
  </div>
  <form action="/add" method="post" enctype="multipart/form-data">
    @csrf
    
    {{-- <h1 class="h3 mb-3 fw-normal">Please sign in</h1> --}}

    <div class="mb-3">
      <label for="nama">Nama Barang</label>
      <input type="text" name="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror" id="nama" value="{{ old('nama_barang') }}" required>
      
      @error('nama_barang')
      <div class="invalid-feedback">
       {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="jml">Jumlah barang</label>
      <input type="number" name="jumlah_barang" class="form-control" id="jml" value="{{ old('jumlah_barang') }} " required >
      
    </div>
    <div class="mb-3">
      <label for="tglpem">Tanggal pembelian</label>
        <input type="date" name="tgl_pembelian" class="form-control" id="tglpem" required >
        
      </div>

      <b> Status Pembayaran </b>
      <div class="mb-3">
        <div class="form-check">
          <input class="form-check-input" value="Cash" type="radio" name="status_pembayaran" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
            Cash
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" value="Kredit" type="radio" name="status_pembayaran" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
            Kredit
          </label>
        </div>
      </div>

      <div class="mb-3">
        <label for="formFile" class="form-label">Upload kwutansi</label>
        
        <input class="form-control  @error('file') is-invalid @enderror" required onchange="previewImage()" type="file" id="file" name="file">
        @error('file')
      <div class="invalid-feedback">
       {{ $message }}
      </div>
      @enderror
      </div>
        
      </div>

 
    <button class="w-10 btn btn-lg btn-primary ms-4" >Reset</button>
    <button class="w-10 btn btn-lg btn-primary" type="submit">simpan</button>
    
  </form>
</div>


    



@endsection