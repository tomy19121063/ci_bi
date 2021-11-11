
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                <!-- Page Heading -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Leasing
                            <a href="<?php echo base_url('Leasing/tambah_data_leasing') ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <?php echo $this->session->flashdata('pesan'); ?>
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Finance</td>
                                            <td>Nama</td>
                                            <td>Telepon</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>

                                <tbody>
                        <?php 

                            $no = 1;
                            
                        
                        foreach ($leasing as $lsg) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $lsg['nm_leasing']; ?></td>
                                <td><?php echo $lsg['nm_karyawan_leasing']; ?></td>
                                <td><?php echo $lsg['tlp_leasing']; ?></td>
                                <td>
                                    <a href="<?php echo base_url() ?>Leasing/edit_data_leasing/<?php echo $lsg['id_leasing']; ?>" class="badge badge-primary">Edit</a>
                                    <a href="<?php echo base_url() ?>Leasing/hapus_data/<?php echo $lsg['id_leasing']; ?>" class="badge badge-danger">Hapus</a>
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
