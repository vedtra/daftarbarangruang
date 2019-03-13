@extends('layouts.master')
@section('row1')
<div class="col-sm-12">
        <div class="white-box">
            
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Keterangan</th>
                                <th>Merk</th>   
                                <th>Spek Lain</th>
                                <th>Type</th>
                                <th>jumlah</th>
                                <th>No Bast</th>
                                <th>Saldo</th>
                                <th>Tahun</th>
                                <th>Tanggal Bast</th>
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach($stokbrg as $stokbrgs)
                        <tr>
                            <td>{{$stokbrgs->kode_brg}}</td>
                            <td>{{$stokbrgs->nm_brg}}</td>
                            <td>{{$stokbrgs->keterangan}}</td>
                            <td>{{$stokbrgs->merk}}</td>
                            <td>{{$stokbrgs->spek_lain}}</td>
                            <td>{{$stokbrgs->type}}</td>
                            <td>{{$stokbrgs->stokbar->jumlah}}</td>
                            <td>{{$stokbrgs->stokbar->no_bast}}</td>
                            <td>{{$stokbrgs->stokbar->saldo}}</td>
                            <td>{{$stokbrgs->stokbar->tahun}}</td>
                            <td>{{$stokbrgs->stokbar->tgl_bast}}</td>


                          
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
@stop