@extends('layouts.master')
<!DOCTYPE html>
@section('row1')
<form class="form-horizontal form-material" role="form" method="POST" action="{{ url('/admin/storestokbrg') }}">
        {{ csrf_field() }}

       
       
        <div class="form-group">
            <label class="col-md-12">Kode Golongan</label>
             <div class="col-sm-12">
                <select class="form-control form-control-line" name="kode_brg" required>
                <option disabled>--Pilih Kode Barang--</option>
                     @foreach ($kodeaset as $kodeasets)
                 <option value="{{ $kodeasets->nup }}">{{ $kodeasets->nup }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Nama Barang</label>
            <div class="col-md-12">
               <input type="text" name="nm_brg" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Keterangan</label>
            <div class="col-md-12">
               <input type="text" name="keterangan" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Merk</label>
            <div class="col-md-12">
               <input type="text" name="merk" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Spek Lain</label>
            <div class="col-md-12">
                <input type="text" name="spek_lain" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Type</label>
            <div class="col-md-12">
                <input type="text" name="type" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Jumlah</label>
            <div class="col-md-12">
                <input type="text" name="jumlah" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">No Bast</label>
            <div class="col-md-12">
                <input type="text" name="no_bast" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Saldo</label>
            <div class="col-md-12">
                <input type="text" name="saldo" class="form-control form-control-line" required> </div>
        </div>


        <div class="form-group">
            <label class="col-md-12">Tahun</label>
            <div class="col-md-12">
                <input type="text" name="tahun" class="form-control form-control-line" required> </div>
        </div>


        <div class="form-group">
            <label class="col-md-12">tgl bast</label>
            <div class="col-md-12">
                <input id="tanggal" type="date" class="form-control" placeholder="yyyy-mm-dd" name="tgl_bast" required autofocus>
        </div> 
    </div>
        

    
        
        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-success">Add</button>
            </div>
        </div>
    </form>


    </html>