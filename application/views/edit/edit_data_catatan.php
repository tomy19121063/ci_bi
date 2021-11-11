<div class="container-fluid">

    <h3>Halaman Tambah Data Catatan</h3>
    <hr>
    <br>

    <form method="post" action="<?php echo base_url('Catatan/proses_edit_data_catatan/'); ?>">
        <div class="form-group row">
            <label for="nm_catatan" class="col-sm-2 col-form-label">Catatan</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nm_catatan" require="" value="<?php echo $catatan['nm_catatan'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="deskripsi" value="<?php echo $catatan['deskripsi'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="dana" class="col-sm-2 col-form-label">Dana</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="dana" value="<?php echo $catatan['dana'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="nm_pemesan" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nm_pemesan" value="<?php echo $catatan['nm_pemesan'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="tlp_pemesan" class="col-sm-2 col-form-label">Telepon</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="tlp_pemesan" value="<?php echo $catatan['tlp_pemesan'] ?>">
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