@extends('layouts.master')
<!DOCTYPE html>
@section('row1')
<form class="form-horizontal form-material" role="form" method="POST" action="{{ url('/pemohon/storebaru') }}">
        {{ csrf_field() }}

       <div class="form-group">
            <label class="col-md-12">Id Mohon</label>
            <div class="col-sm-12">
               <select class="form-control form-control-line" name="id" required>
                <option >--Pilih ID--</option>
                     @foreach ($storebrg as $storebrgs)
                 <option value="{{ $storebrgs->stokbar->id}}">{{ $storebrgs->stokbar->id}} {{ $storebrgs->nm_brg }}</option>
                    @endforeach
                </select>
                
        </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">Nama Barang</label>
            <div class="col-sm-12">
                <select class="form-control form-control-line" name="nm_brg" required>
                <option >--Pilih Barang--</option>
                     @foreach ($storebrg as $storebrgs)
                 <option value="{{ $storebrgs->nm_brg }}">{{ $storebrgs->nm_brg   }}&nbsp&nbsp({{ $storebrgs->stokbar->jumlah }})</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Jumlah</label>
            <div class="col-sm-12">
                <input type="text" name="jumlah" class="form-control form-control-line" required>
        </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Jenis Mohon</label>
            <div class="col-sm-12">
                <input type="text" class="form-control form-control-line" name="jenis_mohon" value="Request barang baru" readonly="">
        </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">NIP Pemohon</label>
            <div class="col-sm-12">
                <input type="text" class="form-control form-control-line" name="Nip" value="{{ Auth::user()->nip }}" readonly="">
        </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Status Mohon</label>
            <div class="col-sm-12">
                <input type="text" class="form-control form-control-line" name="kode_status_mohon" value="Request" readonly="">
        </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">Ruang Tujuan</label>
            <div class="col-md-12">
                <select class="form-control form-control-line" name="ruang_tujuan" required>
                    <option >--Pilih Ruangan--</option>
                @foreach ($dbr as $dbrs)

                 <option value="{{ $dbrs->kode_ruang_milik }}">{{ $dbrs->kode_ruang_milik }}</option>
                    @endforeach
                    </select>
        </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Keperluan</label>
            <div class="col-sm-12">
                <input type="text" name="keperluan" class="form-control form-control-line" required>
        </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-success">Add</button>
            </div>
        </div>
    </form>


    </html>