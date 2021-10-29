<?php $this->load->view('components/header') ?>
<!-- Page -->
<div class="page">
    <div class="page-header">
        <h1 class="page-title">Detail Kriteria</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('criteria') ?>">Kriteria</a></li>
            <li class="breadcrumb-item active">Detail Kritria</li>
        </ol>
    </div>

    <div class="page-content">
        <div class="panel">
            <div class="panel-body container-fluid">
                <div class="row row-lg">
                    <div class="col-md-12 col-lg-12">
                        <!-- Example Horizontal Form -->
                        <div class="example-wrap">
                            <div class="example">
                                <div class="form-group form-material row">
                                    <label class="col-md-3 col-form-label">Kode Kriteria </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="kode_kriteria" value="<?php echo $criteria->kode_kriteria; ?>" placeholder="Masukkan Kode Kriteria" autocomplete="off" readonly />
                                    </div>
                                </div>
                                <div class="form-group form-material row">
                                    <label class="col-md-3 col-form-label">Nama Kriteria </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nama_kriteria" value="<?php echo $criteria->nama_kriteria; ?>" placeholder="Masukkan Nama Kriteria" autocomplete="off" readonly />
                                    </div>
                                </div>
                                <div class="form-group form-material row">
                                    <label class="col-md-3 col-form-label">Jenis Kriteria </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nama_kriteria" value="<?php echo $criteria->jenis_kriteria; ?>" autocomplete="off" readonly />
                                    </div>
                                </div>
                                <div class="form-group form-material row">
                                    <label class="col-md-3 col-form-label">Bobot Kriteria </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="bobot" value="<?php echo $criteria->bobot; ?>" placeholder="Masukkan Bobot Kriteria" autocomplete="off" readonly />
                                    </div>
                                </div>
                                <div class="form-group form-material row">
                                    <label class="col-md-3 col-form-label">Keterangan </label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="keterangan" rows="3" placeholder="Masukkan Keterangan" readonly><?php echo $criteria->keterangan; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group form-material row">
                                    <div class="col-md-9">
                                        <a href="<?php echo base_url('criteria') ?>"><button type="button" class="btn btn-default btn-outline">Kembali</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Example Horizontal Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page -->