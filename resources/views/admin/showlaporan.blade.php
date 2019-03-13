<!DOCTYPE html>
<html>
<head>
        <title>show Laporan</title>
        <style type="text/css">
        table{
            width:20%;
            margin:0 auto;
            border:0 px solid;

        }
        </style>
</head>



<table>
    <caption><h1>Laporan daftar barang</h1></caption>
     
                            <tr>
                                <td>Kode Ruang</td><td>Action</td>
                            </tr>
                            <tr>
                            <tr>
                            <tr>    
                            <tr>
                                <td>22222</td><td><a href="{{url('admin/getPDF',22222)}}" class="btn btn-success">PDF</a></td>
                            </tr>
                            <tr>
                                <td>111111</td><td><a href="{{url('admin/getPDF',111111)}}" class="btn btn-success">PDF</a></td>
                            </tr>
                            <tr>
                                <td>5555</td><td><a href="{{url('admin/getPDF',5555)}}" class="btn btn-success">PDF</a></td>
                            </tr>

                            <tr>
                                <td>Semua ruang</td><td><a href="{{ URL::to('/admin/getPDFAll') }}">PDF</a></td>
                            </tr>
                        
                            
                    
        
    </div>
</div>
    </html>