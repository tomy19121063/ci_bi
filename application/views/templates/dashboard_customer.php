
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                <!-- Page Heading -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Customer
                            <a href="<?php echo base_url('Customer/tambah_data_customer') ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <?php echo $this->session->flashdata('pesan'); ?>
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Nama</td>
                                            <td>telepon</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>

                                <tbody>
                        <?php 

                            $no = 1;
                            
                        
                        foreach ($customer as $cst) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $cst['nm_customer']; ?></td>
                                <td><?php echo $cst['tlp_customer']; ?></td>
                                <td>
                                    <a href="<?php echo base_url() ?>Customer/edit_data_customer/<?php echo $cst['id_customer']; ?>" class="badge badge-primary">Edit</a>
                                    <a href="<?php echo base_url() ?>Customer/hapus_data/<?php echo $cst['id_customer']; ?>" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>

                            <?php endforeach;?>
                        </tbody>
                            </table>

                                <!-- end of row -->
                                </div>
                        <!-- /.container-fluid -->

                            </div>
                        </div>
                    </div>
                </div> 
            <!-- End of Main Content -->
