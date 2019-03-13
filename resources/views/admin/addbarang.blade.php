@extends('layouts.master')
<!DOCTYPE html>
@section('row1')
<form class="form-horizontal form-material" role="form" method="POST" action="{{ url('/admin/storebrg') }}">
        {{ csrf_field() }}

       
       
        <div class="form-group">
            <label class="col-md-12">Kode Barang</label>
            <div class="col-md-12">
                <input type="text" name="kode_brg" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Nama Barang</label>
            <div class="col-md-12">
               <input type="text" name="nm_brg" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">merk</label>
            <div class="col-md-12">
               <input type="text" name="merk" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Spek lain</label>
            <div class="col-md-12">
               <input type="text" name="spek_lain" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">type</label>
            <div class="col-md-12">
                <input type="text" name="type" class="form-control form-control-line" required> </div>
        </div>


        <div class="form-group">
            <label class="col-md-12">Keterangan</label>
            <div class="col-md-12">
                <input type="text" name="keterangan" class="form-control form-control-line" required> </div>
        </div>
            
        
        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-success">Add</button>
            </div>
        </div>
    </form>


    </html>