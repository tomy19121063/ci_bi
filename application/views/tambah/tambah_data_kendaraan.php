<div class="container-fluid">

    <h3>Halaman Tambah Data</h3>
    <hr>
    <br>

    <form method="post" action="<?php echo base_url('Kendaraan/proses_tambah_data'); ?>">
        <div class="form-group row">
            <label for="nm_kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nm_kategori">
            </div>
        </div>

        <div class="form-group row">
            <label for="nopol" class="col-sm-2 col-form-label">Nopol</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nopol">
            </div>
        </div>

        <div class="form-group row">
            <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="tahun">
            </div>
        </div>

        <div class="form-group row">
            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="merk">
            </div>
        </div>

        <div class="form-group row">
            <label for="model" class="col-sm-2 col-form-label">Model</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="model">
            </div>
        </div>

        <div class="form-group row">
            <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="tipe">
            </div>
        </div>

        <div class="form-group row">
            <label for="km" class="col-sm-2 col-form-label">Kilometer</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="km">
            </div>
        </div>

        <div class="form-group row">
            <label for="warna" class="col-sm-2 col-form-label">Warna</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="warna">
            </div>
        </div>

        <div class="form-group row">
            <label for="bbm" class="col-sm-2 col-form-label">BBM</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="bbm">
            </div>
        </div>

        <div class="form-group row">
            <label for="transmisi" class="col-sm-2 col-form-label">Transmisi</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="transmisi">
            </div>
        </div>

        <div class="form-group row">
            <label for="harga_beli" class="col-sm-2 col-form-label">Harga Beli</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="harga_beli">
            </div>
        </div>

        <div class="form-group row">
            <label for="harga_jual" class="col-sm-2 col-form-label">Harga Jual</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="harga_jual">
            </div>
        </div>

        <div class="form-group row">
            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="stok">
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