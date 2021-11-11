<div class="container-fluid">

    <h3>Halaman Edit Data Kendaraan</h3>
    <hr>
    <br>

    <form method="post" action="<?php echo base_url('Kendaraan/proses_edit_data_kendaraan/') . $kendaraan['id_kendaraan'] ?>">

        <input type="hidden" name="id_kendaraan" value="<?php echo $kendaraan['id_kendaraan']; ?>">

        <div class="form-group row">
            <label for="nm_kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nm_kategori" require="" value="<?php echo $kendaraan['nm_kategori'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="nopol" class="col-sm-2 col-form-label">Nopol</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nopol" require="" value="<?php echo $kendaraan['nopol'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="tahun" require="" value="<?php echo $kendaraan['tahun'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="merk" require="" value="<?php echo $kendaraan['merk'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="model" class="col-sm-2 col-form-label">Model</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="model" require="" value="<?php echo $kendaraan['model'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="tipe" require="" value="<?php echo $kendaraan['tipe'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="km" class="col-sm-2 col-form-label">Kilometer</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="km" require="" value="<?php echo $kendaraan['km'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="warna" class="col-sm-2 col-form-label">Warna</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="warna" require="" value="<?php echo $kendaraan['warna'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="bbm" class="col-sm-2 col-form-label">BBM</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="bbm" require="" value="<?php echo $kendaraan['bbm'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="transmisi" class="col-sm-2 col-form-label">Transmisi</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="transmisi" require="" value="<?php echo $kendaraan['transmisi'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="harga_beli" class="col-sm-2 col-form-label">Harga Beli</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="harga_beli" require="" value="<?php echo $kendaraan['harga_beli'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="harga_jual" class="col-sm-2 col-form-label">Harga Jual</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="harga_jual" require="" value="<?php echo $kendaraan['harga_jual'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="stok" require="" value="<?php echo $kendaraan['stok'] ?>">
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