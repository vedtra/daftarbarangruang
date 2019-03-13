<h2>Tambah Data Ruang </h2>

<form class="form-horizontal form-material" role="form" method="POST" action="{{ url('/admin/storeruang') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="col-md-12">ID Ruangan</label>
            <div class="col-md-12">
                <input type="text" name="id_ruang" class="form-control form-control-line" required> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Nama Ruangan</label>
            <div class="col-md-12">
                <input type="text" name="nm_ruang" class="form-control form-control-line" required> </div>
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