
@extends('layout.mainlayout')
@section('content')


{{-- <h1> <a href="/data/{{ $listdata->id }}"> {{ $listdata->nama_barang }} </a></h1> --}}


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">List Pembelian</h1>
  
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="/list/cetak_pdf" type="button"  class="btn btn-sm btn-outline-secondary">Export PDF</a>
      <button type="button"  class="btn btn-sm btn-outline-secondary">Export excel</button>
      {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Export pdf</button> --}}
    </div>
    
    
  </div>
</div>

<form class="row g-3" action="/list" >
  <div class="col-auto">
    <label for="exampleFormControlInput1" class="form-label">Tanggal awal</label>
    <input type="date"  class="form-control" id="tgl_awal" name="tgl_awal" >
  </div>
  <div class="col-auto">
    <label for="exampleFormControlInput1" class="form-label">Sampai dengan</label>
    <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Cari</button>
  </div>
</form>

    <div class="table-responsive col-lg-9">
      <table class="table table-striped table-sm">
        <thead>
        
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Tanggal pembelian</th>
            <th scope="col">Cara bayar</th>
            {{-- <th scope="col">Action</th> --}}
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $listdata)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $listdata->nama_barang }}</td>
            <td>{{ $listdata->jumlah_barang }}</td>
            <td>{{ $listdata->tgl_pembelian }}</td>
            <td>{{ $listdata->status_pembayaran }}</td>
            <td>
                {{-- <a href="/data/{{ $listdata->id }}" class="badge bg-info"><span >Detail</span></a> --}}
                {{-- <a href="/data/{{ $listdata->id }}" class="badge bg-warning"><span >Edit</span></a>
                <form action="/add" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confrim('yakin?')"><span >Hapus</span></button> --}}
            </form>
                
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>


@endsection