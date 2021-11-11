
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                <!-- Page Heading -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kendaraan
                            <a href="<?php echo base_url('Kendaraan/tambah_data_kendaraan') ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                        </div>
                        <div class="card-body">
                        <?php echo $this->session->flashdata('pesan'); ?>
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Kategori</td>
                                            <td>Nopol</td>
                                            <td>Tahun</td>
                                            <td>Merk</td>
                                            <td>Model</td>
                                            <td>Tipe</td>
                                            <td>KM</td>
                                            <td>Warna</td>
                                            <td>BBM</td>
                                            <td>Transmisi</td>
                                            <td>Harga Jual</td>
                                            <td>Stok</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>

                                <tbody>
                        <?php 

                            $no = 1;
                            
                        
                        foreach ($kendaraan as $kndrn) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $kndrn['nm_kategori']; ?></td>
                                <td><?php echo $kndrn['nopol']; ?></td>
                                <td><?php echo $kndrn['tahun']; ?></td>
                                <td><?php echo $kndrn['merk']; ?></td>
                                <td><?php echo $kndrn['model']; ?></td>
                                <td><?php echo $kndrn['tipe']; ?></td>
                                <td><?php echo $kndrn['km']; ?></td>
                                <td><?php echo $kndrn['warna']; ?></td>
                                <td><?php echo $kndrn['bbm']; ?></td>
                                <td><?php echo $kndrn['transmisi']; ?></td>
                                <td><?php echo $kndrn['harga_jual']; ?></td>
                                <td><?php echo $kndrn['stok']; ?></td>
                                <td>
                                    <a href="<?php echo base_url() ?>Kendaraan/edit_data_kendaraan/<?php echo $kndrn['id_kendaraan']; ?>" class="badge badge-primary">Edit</a>
                                    <a href="<?php echo base_url() ?>Kendaraan/hapus_data/<?php echo $kndrn['id_kendaraan']; ?>" class="badge badge-danger">Hapus</a>
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
