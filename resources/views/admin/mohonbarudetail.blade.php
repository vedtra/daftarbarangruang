@extends('layouts.master')

@section('row1')
    <form class="form-horizontal form-material" role="form" method="POST" enctype="multipart/form-data" action="{{url('admin/confirmbaru',$pemohons->id)}}"">
        {{ csrf_field() }}
        
 
        <div class="form-group">
            <label class="col-md-12">Status</label>
            <div class="col-md-12">
                <input type="text"  value="Diterima" name="kode_status_mohon" class="form-control form-control-line" readonly=""> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Kode Ruang Tujuan</label>
            <div class="col-md-12">
                <input type="text" name="kode_ruang_milik" value="{{ $pemohons->ruang_tujuan }}" class="form-control form-control-line" readonly=""> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Nama Barang</label>
            <div class="col-md-12">
                <input type="text" name="nama_barang" value="{{ $pemohons->nm_brg }}" class="form-control form-control-line" readonly=""> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Kode Barang</label>
            <div class="col-sm-12">
                <select class="form-control form-control-line" name="kode_barang" required>
                <option value>--Pilih Kode Barang--</option>
                     @foreach ($brg as $brgs)
                 <option value="{{ $brgs->kode_brg}}">{{ $brgs->kode_brg }} { {{$brgs->nm_brg}} }</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Jumlah Barang</label>
            <div class="col-md-12">
                <input type="text" name="jlh_brg" value="{{ $pemohons->jumlah }}" class="form-control form-control-line" readonly=""> </div>
        </div>
           
        <div class="form-group">
            <label class="col-md-12">NIP Dbr</label>
            <div class="col-md-12">
                <input type="text" name="nip_dbr"class="form-control form-control-line"> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">No Bast</label>
            <div class="col-md-12">
                <input type="text" name="no_bast" class="form-control form-control-line"> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">status</label>
            <div class="col-md-12">
                <input type="double" name="kode_status" class="form-control form-control-line"> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">tanggal awal</label>
            <div class="col-md-6">
                <input id="tanggal" type="date" class="form-control" placeholder="yyyy-mm-dd" name="tgl_awal" required autofocus> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">tanggal akhir</label>
            <div class="col-md-6">
                <input id="tanggal" type="date" class="form-control" placeholder="yyyy-mm-dd" name="tgl_akhir" required autofocus> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">tanggal bast</label>
            <div class="col-md-6">
                <input id="tanggal" type="date" class="form-control" placeholder="yyyy-mm-dd" name="tgl_bast" required autofocus> </div>
        </div>

        
        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-success">Konfirmasi</button>
            </div>
        </div>

        </form>
@endsection
