<form class="form-horizontal form-material" role="form" method="POST" action="{{ url('/admin/storeruangmilik') }}">
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
                <select class="form-control form-control-line" name="kode_ruang" required>
                <option disabled>--Pilih Ruangan--</option>
                     @foreach ($ruang as $ruangs)
                 <option value="{{ $ruangs->id_ruang }}">{{ $ruangs->id_ruang }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Kd Unit</label>
            <div class="col-md-12">
                <input type="text" name="kd_unit" class="form-control form-control-line" required> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Nip Rekam</label>
            <div class="col-md-12">
               <input type="text" name="nip_rekam" class="form-control form-control-line" required> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Nip Tanggung Jawab</label>
            <div class="col-md-12">
               <input type="text" name="nip_tgjwb" class="form-control form-control-line" required> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Nip Update</label>
            <div class="col-md-12">
                <input type="text" name="nip_update" class="form-control form-control-line" required> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">No Nd</label>
            <div class="col-md-12">
                <input type="text" name="no_nd" class="form-control form-control-line" required> </div>
        </div>
        <div class="col-sm-12">
        <td><label class="col-sm-12">Tanggal Awal</label></td><br>
             <input id="tanggal" type="date" class="form-control" placeholder="yyyy-mm-dd" name="tgl_awal" required autofocus>
        </div>

       <div class="col-sm-12">
        <td><label class="col-sm-12">Tanggal Akhir</label></td><br>     
             <input id="tanggal" type="date" class="form-control" placeholder="yyyy-mm-dd" name="tgl_nd" required autofocus>
        </div>
        
        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-success">Add</button>
            </div>
        </div>
    </form>