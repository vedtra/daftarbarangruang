<form class="form-horizontal form-material" role="form" method="POST" action="{{ url('/admin/storedbr') }}">
        {{ csrf_field() }}

       <!--  <div class="form-group">
         {!! Form::label('mobil', 'Kode Ruangan', array('class' => 'control-label')) !!}
                 <select name="kode_r" class="form-control">
                @foreach ($ruang as $ruangs)
                 <option value="{{ $ruangs->id_ruang }}">{{ $ruangs->id_ruang }} [{{ $ruangs->id_ruang}}]</option>
                    @endforeach
                </select>
        </div>
 -->
        <div class="form-group">
            <label class="col-sm-12">Kode ruangan</label>
            <div class="col-sm-12">
                <select class="form-control form-control-line" name="kode_ruang_milik" required>
                <option value>--Pilih Ruangan--</option>
                     @foreach ($ruang as $ruangs)
                 <option value="{{ $ruangs->id_ruang }}">{{ $ruangs->id_ruang }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">Kode Barang</label>
            <div class="col-sm-12">
                <select class="form-control form-control-line" name="kode_barang" required>
                <option value>--Pilih Kode Barang-- </option>
                     @foreach ($brg as $brgs)
                 <option value="{{ $brgs->kode_brg }}">{{ $brgs->kode_brg }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">Nama Barang</label>
            <div class="col-sm-12">
                <select class="form-control form-control-line" name="nama_barang" required>
                <option value>--Pilih Nama Barang-- </option>
                     @foreach ($brg as $brgs)
                 <option value="{{ $brgs->nm_brg }}">{{ $brgs->nm_brg }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Jumlah Barang</label>
            <div class="col-md-12">
                <input type="text" name="jlh_brg" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Nip Dbr</label>
            <div class="col-md-12">
               <input type="text" name="nip_dbr" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">no bast</label>
            <div class="col-md-12">
               <input type="text" name="no_bast" class="form-control form-control-line" required> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">kode status</label>
            <div class="col-md-12">
                <input type="text" name="kode_status" class="form-control form-control-line" required> </div>
        </div>


        <div class="col-sm-12">
        <td><label class="col-sm-12">Tanggal Awal</label></td><br>     
             <input id="tanggal" type="date" class="form-control" placeholder="yyyy-mm-dd" name="tgl_awal" required autofocus>
        </div>

       <div class="col-sm-12">
        <td><label class="col-sm-12">Tanggal Akhir</label></td><br>     
             <input id="tanggal" type="date" class="form-control" placeholder="yyyy-mm-dd" name="tgl_akhir" required autofocus>
        </div>

        <div class="col-sm-12">
        <td><label class="col-sm-12">Tanggal Bast</label></td><br>     
             <input id="tanggal" type="date" class="form-control" placeholder="yyyy-mm-dd" name="tgl_bast" required autofocus>
        </div>
        
        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-success">Add</button>
            </div>
        </div>
    </form>