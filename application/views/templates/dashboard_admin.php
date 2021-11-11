
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                <!-- Page Heading -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example
                            <a href="<?php echo base_url('Admin/tambah_data_admin') ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                        </div>
                        <div class="card-body">
                        <?php echo $this->session->flashdata('pesan'); ?>
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Username</td>
                                            <td>Password</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>

                                <tbody>
                        <?php 

                            $no = 1;
                            
                        
                        foreach ($admin as $adm) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $adm['username']; ?></td>
                                <td><?php echo $adm['password']; ?></td>
                                <td>
                                    <a href="<?php echo base_url() ?>Admin/edit_data_admin/<?php echo $adm['id_admin']; ?>" class="badge badge-primary">Edit</a>
                                    <a href="<?php echo base_url() ?>Admin/hapus_data/<?php echo $adm['id_admin']; ?>" class="badge badge-danger">Hapus</a>
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
