<form class="form-horizontal form-material" role="form" method="POST" action="{{ url('/admin/storeakun') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="col-md-12">Username</label>
            <div class="col-md-12">
                <input type="text" name="username" class="form-control form-control-line" required> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Password</label>
            <div class="col-md-12">
                <input type="password" name="password" class="form-control form-control-line" required> </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Confirm Password</label>
            <div class="col-md-12">
                <input type="password" name="password_confirmation" class="form-control form-control-line" required> </div>
        </div>
        <div class="form-group">
            <label class="col-sm-12">Role</label>
            <div class="col-sm-12">
                <select class="form-control form-control-line" name="role" required>
                    <option disabled>--Pilih Role--</option>
                    <option value="1">admin</option>
                    <option value="2">duknis</option>
                    <option value="3">pemohon</option>
                
                </select>
            </div>
        </div>

         <div class="form-group">
            <label class="col-md-12">NIP</label>
            <div class="col-md-12">
                <input type="text" name="nip" class="form-control form-control-line" required> </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn btn-success">Add</button>
            </div>
        </div>
    </form>