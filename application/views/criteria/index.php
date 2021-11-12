<?php $this->load->view('components/header') ?>

<!-- Page -->
<div class="page">
    <div class="page-header">
        <h1 class="page-title">List Kriteria</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item active">Kriteria</li>
        </ol>
    </div>

    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <?php if ($this->session->userdata('role_id') == 0) { ?>
                    <a href="<?php echo base_url('criteria/create') ?>"><button type="button" class="btn btn-block btn-primary" style="width: 15%; margin-bottom: 2%">Tambah Baru</button></a>
                <?php } ?>
                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Kriteria</th>
                            <th>Nama Kriteria</th>
                            <th>Jenis</th>
                            <th>Bobot</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($criterias as $key => $value) {
                            $no++;
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td>
                                    <a href="<?php echo base_url('criterion_values/'); echo $value->id; ?>">
                                        <?php echo $value->kode_kriteria; ?></td>
                                    </a>
                                <td><?php echo $value->nama_kriteria; ?></td>
                                <td><?php echo $value->jenis_kriteria; ?></td>
                                <td><?php echo $value->bobot; ?></td>
                                <td>
                                    <?php if ($this->session->userdata('role_id') == 0) { ?>
                                        <a href="<?php echo base_url('criteria/show/'); echo $value->id; ?>"><i class="icon wb-eye" aria-hidden="true" style="margin-right: 2px"></i></a>
                                        <a href="<?php echo base_url('criteria/edit/'); echo $value->id; ?>"><i class="icon wb-pencil" aria-hidden="true" style="margin-right: 2px"></i></a>
                                        <a href="void::"><i class="icon wb-trash" data-target="#exampleNiftyFadeScale<?php echo $value->id; ?>" data-toggle="modal" aria-hidden="true"></i></a>
                                    <?php }elseif ($this->session->userdata('role_id') == 1) { ?>
                                        <a href="<?php echo base_url('criteria/show/'); echo $value->id; ?>"><i class="icon wb-eye" aria-hidden="true" style="margin-right: 2px"></i></a>
                                    <?php } elseif ($this->session->userdata('role_id') == 2) { ?>
                                        <a href="<?php echo base_url('criteria/show/'); echo $value->id; ?>"><i class="icon wb-eye" aria-hidden="true" style="margin-right: 2px"></i></a>
                                    <?php } ?>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade modal-fade-in-scale-up" id="exampleNiftyFadeScale<?php echo $value->id; ?>" aria-hidden="true" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
                                <div class="modal-dialog modal-simple">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <h4 class="modal-title">Konfimasi hapus data</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Anda yakin ingin menghapus data ini?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Batal</button>
                                            <a href="<?php echo base_url('criteria/destroy/'); echo $value->id; ?>"><button type="button" class="btn btn-primary">Hapus Data</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>
</div>
<!-- End Page -->