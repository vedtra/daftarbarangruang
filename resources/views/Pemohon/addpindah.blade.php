@extends('layouts.master')
<!DOCTYPE html>
@section('row1')
<form class="form-horizontal form-material" role="form" method="POST" action="{{ url('/pemohon/storepindah') }}">
        {{ csrf_field() }}

       <div class="form-group">
            <label class="col-md-12">Id Mohon</label>
            <div class="col-sm-12">
               <select class="form-control form-control-line" name="id" required>
                <option >--Pilih ID--</option>
                     @foreach ($dbr as $dbrs)
                 <option value="{{ $dbrs->id_dbr}}"> {{ $dbrs->id_dbr }} { {{ $dbrs->kode_barang }} } { {{ $dbrs->kode_ruang_milik }} }</option>
                    @endforeach
                </select>
                
        </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">Kode barang</label>
            <div class="col-sm-12">
                <select class="form-control form-control-line" name="id_dbr_mohon" required>
                <option >--Pilih Barang--</option>
                     @foreach ($dbr as $dbrs)
                 <option value="{{ $dbrs->kode_barang }}">{{ $dbrs->kode_barang }} { {{ $dbrs->nama_barang }} } { {{ $dbrs->kode_ruang_milik }} }</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Jenis Mohon</label>
            <div class="col-sm-12">
                <input type="text" class="form-control form-control-line" name="jenis_mohon" value="Request Perpindahan barang" readonly="">
        </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">NIP</label>
            <div class="col-sm-12">
                <input type="text" class="form-control form-control-line" name="nip" value="{{ Auth::user()->nip }}" readonly="">
        </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Status Mohon</label>
            <div class="col-sm-12">
                <input type="text" class="form-control form-control-line" name="kode_status_mohon" value="Request" readonly="">
        </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">Ruang Asal</label>
            <div class="col-md-12">
                <select class="form-control form-control-line" name="ruang_asal" required>
                    <option >--Pilih Ruangan--</option>
                @foreach ($ruang as $ruangs)
                 <option value="{{ $ruangs->id_ruang }}">{{ $ruangs->id_ruang }}{ {{$ruangs->nm_ruang}} }</option>
                    @endforeach
                    </select>
        </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Ruang Tujuan</label>
             <div class="col-md-12">
                <select class="form-control form-control-line" name="ruang_tujuan" required>
                    <option >--Pilih Ruangan--</option>
                @foreach ($ruang as $ruangs)

                 <option value="{{ $ruangs->id_ruang }}">{{ $ruangs->id_ruang }} { {{$ruangs->nm_ruang}} }</option>
                    @endforeach
                    </select>
        </div>
        </div>

       
        
        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-success">Add</button>
            </div>
        </div>
    </form>


    </html>