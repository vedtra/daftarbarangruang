<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
    <body>

    <h4 class="page-title"></h4> </div>
    
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Halaman Pemohon</a></li>
        <a href="{{ url('pemohon/addpindah') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Request perpindahan barang</span></a>
        <br>
        <a href="{{ url('pemohon/addbarangbaru') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Request barang baru</span></a>
        <br>
        <a href="{{ url('pemohon/mohonpindah') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Informasi permohonan pindah barang</span></a>
        <br>
        <a href="{{ url('pemohon/mohonbaru') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Informasi permohonan barang baru</span></a>
        
    </ol>
    

</body>

</html>