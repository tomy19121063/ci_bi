<div class="container-fluid">

    <h3>Halaman Tambah Data Catatan</h3>
    <hr>
    <br>

    <form method="post" action="<?php echo base_url('Catatan/proses_tambah_data'); ?>">
        <div class="form-group row">
            <label for="nm_catatan" class="col-sm-2 col-form-label">Catatan</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nm_catatan">
            </div>
        </div>

        <div class="form-group row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="deskripsi">
            </div>
        </div>

        <div class="form-group row">
            <label for="dana" class="col-sm-2 col-form-label">Dana</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="dana">
            </div>
        </div>

        <div class="form-group row">
            <label for="nm_pemesan" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nm_pemesan">
            </div>
        </div>

        <div class="form-group row">
            <label for="tlp_pemesan" class="col-sm-2 col-form-label">Telepon</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="tlp_pemesan">
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