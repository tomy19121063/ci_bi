<div class="container-fluid">

    <h3>Halaman Tambah Data</h3>
    <hr>
    <br>

    <form method="post" action="<?php echo base_url('Admin/proses_tambah_data'); ?>">

        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="username">
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="password">
            </div>
        </div>

        <div class="form-group row">
            <label for="button" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-5">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    
    </form>
</div>