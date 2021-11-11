<div class="container-fluid">

    <h3>Halaman Edit Data Admin</h3>
    <hr>
    <br>

    <form method="post" action="<?php echo base_url('Admin/proses_edit_data_admin/') . $admin['id_admin'] ?>">

        <input type="hidden" name="id_admin" value="<?php echo $admin['id_admin']; ?>">

        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="username" require="" value="<?php echo $admin['username'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="password" value="<?php echo $admin['password'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="button" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-5">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    
    </form>
</div>