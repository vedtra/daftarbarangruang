@extends('layouts.master')
<!DOCTYPE html>
@section('row1')
<form class="form-horizontal form-material" role="form" method="POST" action="{{ url('/admin/storeaset') }}">
        {{ csrf_field() }}

       
       
        <div class="form-group">
            <label class="col-md-12">Kode Golongan</label>
            <div class="col-md-12">
                <input type="text" name="id_gol" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Kode Bidang</label>
            <div class="col-md-12">
               <input type="text" name="id_bid" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Kode Kelompok</label>
            <div class="col-md-12">
               <input type="text" name="id_kel" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Kode Sub kelompok</label>
            <div class="col-md-12">
               <input type="text" name="id_subkel" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Kode Sub sub kelompok</label>
            <div class="col-md-12">
                <input type="text" name="id_ssubkel" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Kondisi</label>
            <div class="col-md-12">
                <input type="text" name="kondisi" class="form-control form-control-line" required> </div>
        </div>

        

    
        
        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-success">Add</button>
            </div>
        </div>
    </form>


    </html>