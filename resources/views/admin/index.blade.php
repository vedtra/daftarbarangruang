<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
    <body>



    <h4 class="page-title"></h4> </div>
    
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Admin</a></li>
        <a href="{{ url('admin/addroom') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Tambah Ruang</span></a>
        <br>
        <a href="{{ url('admin/show') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Data Ruang</span></a>
        <br>
        <a href="{{ url('admin/addroommilik') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Tambah Ruang Milik</span></a>
        	<br>
        <a href="{{ url('admin/showroommilik') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Data Ruang Milik</span></a>
        <br>
        <a href="{{ url('admin/addDbr') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Tambah data Dbr</span></a>
        <br>
        <a href="{{ url('admin/showdbr') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Data data Dbr</span></a>
        <br>
        <a href="{{ url('admin/showmohon') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Data Mohon</span></a>
        <br>
        <a href="{{ url('admin/addkodeaset') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Tambah Data Kode aset</span></a>
        <br>
        <a href="{{ url('admin/showkodeaset') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Data Kode aset</span></a>
        <br>
        <a href="{{ url('admin/addbrg') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Tambah barang</span></a>
        <br>
        <a href="{{ url('admin/addstokbrg') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Tambah stok barang</span></a>
        <br>
        <a href="{{ url('admin/showstokbrg') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">data stok barang</span></a>
        <br>
        <a href="{{ url('admin/showmohonbaru') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Data Mohon barang baru</span></a>
        <br>
        <a href="{{ url('admin/tambahakun') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Tambah Akun Baru</span></a>
        <br>
        <a href="{{ url('admin/showakun') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Data Akun</span></a>
        <br>
        <a href="{{ url('admin/laporandbr') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Laporan Dbr</span></a>

        <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
    

</body>

</html>