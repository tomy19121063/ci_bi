<div class="container-fluid">

    <h3>Halaman Edit Data Leasing</h3>
    <hr>
    <br>

    <form method="post" action="<?php echo base_url('Leasing/proses_edit_data_leasing/') . $leasing['id_leasing'] ?>">

        <input type="hidden" name="id_leasing" value="<?php echo $leasing['id_leasing']; ?>">

        <div class="form-group row">
            <label for="nm_leasing" class="col-sm-2 col-form-label">Finance</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nm_leasing" require="" value="<?php echo $leasing['nm_leasing'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="nm_karyawan_leasing" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nm_karyawan_leasing" require="" value="<?php echo $leasing['nm_karyawan_leasing'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="tlp_leasing" class="col-sm-2 col-form-label">Telepon</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="tlp_leasing" value="<?php echo $leasing['tlp_leasing'] ?>">
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