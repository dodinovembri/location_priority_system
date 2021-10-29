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
                <a href="<?php echo base_url('criteria/create') ?>"><button type="button" class="btn btn-block btn-primary" style="width: 15%; margin-bottom: 2%">Tambah Baru</button></a>
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
                                <td><?php echo $value->kode_kriteria; ?></td>
                                <td><?php echo $value->nama_kriteria; ?></td>
                                <td><?php echo $value->jenis_kriteria; ?></td>
                                <td><?php echo $value->bobot; ?></td>
                                <td>
                                    <a href="<?php echo base_url('criteria/show/'); echo $value->id; ?>"><i class="icon wb-eye" aria-hidden="true" style="margin-right: 2px"></i></a>
                                    <a href="<?php echo base_url('criteria/edit/'); echo $value->id; ?>"><i class="icon wb-pencil" aria-hidden="true" style="margin-right: 2px"></i></a>
                                    <a href=""><i class="icon wb-trash" aria-hidden="true"></i></a>
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