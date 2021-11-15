<?php $this->load->view('components/header') ?>

<!-- Page -->
<div class="page">
    <div class="page-header">
        <h1 class="page-title">List Puskesmas</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item active">Puskesmas</li>
        </ol>
    </div>

    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <?php if ($this->session->userdata('role_id') == 0 || $this->session->userdata('role_id') == 2) { ?>
                    <a href="<?php echo base_url('alternative/create') ?>"><button type="button" class="btn btn-block btn-primary" style="width: 15%; margin-bottom: 2%">Tambah Baru</button></a>
                <?php } ?>
                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Puskesmas</th>
                            <th>Nama Puskesmas</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($alternatives as $key => $value) {
                            $no++;
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $value->kode_alternatif; ?></td>
                                <td><?php echo $value->nama_alternatif; ?></td>
                                <td><?php echo $value->keterangan; ?></td>
                                <td><?php echo $value->no_telepon; ?></td>
                                <td><?php echo $value->email; ?></td>
                                <td>
                                    <a href="<?php echo base_url('alternative_profile/show/'); echo $value->id; ?>"><i class="icon wb-eye" aria-hidden="true" style="margin-right: 2px"></i></a>
                                    <a href="<?php echo base_url('alternative_profile/edit/'); echo $value->id; ?>"><i class="icon wb-pencil" aria-hidden="true" style="margin-right: 2px"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>
</div>
<!-- End Page -->