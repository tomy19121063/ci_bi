
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                <!-- Page Heading -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Catatan
                            <a href="<?php echo base_url('Catatan/tambah_data_catatan') ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <?php echo $this->session->flashdata('pesan'); ?>
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Catatan</td>
                                            <td>Deskripsi</td>
                                            <td>Dana</td>
                                            <td>Nama</td>
                                            <td>Telepon</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>

                                <tbody>
                        <?php 

                            $no = 1;
                            
                        
                        foreach ($catatan as $ctt) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $ctt['nm_catatan']; ?></td>
                                <td><?php echo $ctt['deskripsi']; ?></td>
                                <td><?php echo $ctt['dana']; ?></td>
                                <td><?php echo $ctt['nm_pemesan']; ?></td>
                                <td><?php echo $ctt['tlp_pemesan']; ?></td>
                                <td>
                                    <a href="<?php echo base_url() ?>Catatan/edit_data_catatan/<?php echo $ctt['id_catatan']; ?>" class="badge badge-primary">Edit</a>
                                    <a href="<?php echo base_url() ?>Catatan/hapus_data/<?php echo $ctt['id_catatan']; ?>" class="badge badge-danger">Selesai</a>
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
