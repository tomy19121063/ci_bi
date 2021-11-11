<div class="container-fluid">

    <h3>Halaman Edit Data Customer</h3>
    <hr>
    <br>

    <form method="post" action="<?php echo base_url('Customer/proses_edit_data_customer/') . $customer['id_customer'] ?>">

        <input type="hidden" name="id_customer" value="<?php echo $customer['id_customer']; ?>">

        <div class="form-group row">
            <label for="nm_customer" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nm_customer" require="" value="<?php echo $customer['nm_customer'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="tlp_customer" class="col-sm-2 col-form-label">Telepon</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="tlp_customer" value="<?php echo $customer['tlp_customer'] ?>">
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