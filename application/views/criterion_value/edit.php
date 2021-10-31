<?php $this->load->view('components/header') ?>
<!-- Page -->
<div class="page">
    <div class="page-header">
        <h1 class="page-title">Edit Nilai Kriteria</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('criteria') ?>">Kriteria</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('criterion_values/');
                                                    echo $this->session->userdata('criteria_id') ?>">Nilai Kriteria</a></li>
            <li class="breadcrumb-item active">Edit Nilai Kritria</li>
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
                                <form method="post" action="<?php echo base_url('criterion_value/update/');
                                                            echo $criterion_value->id; ?>">
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Persentase </label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="nilai_awal" value="<?php echo $criterion_value->nilai_awal; ?>" placeholder="Masukkan nilai awal" autocomplete="off" required />
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="nilai_akhir" value="<?php echo $criterion_value->nilai_akhir; ?>" placeholder="Masukkan nilai akhir" autocomplete="off" required />
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Keterangan </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="keterangan" value="<?php echo $criterion_value->keterangan; ?>" placeholder="Masukkan keterangan" autocomplete="off" required />
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Nilai </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai" value="<?php echo $criterion_value->nilai; ?>" placeholder="Masukkan nilai" autocomplete="off" required />
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label"></label>
                                        <div class="col-md-9">
                                            <button type="submit" class="btn btn-primary">Simpan </button>
                                            <a href="<?php echo base_url('criterion_values/');
                                                        echo $this->session->userdata('criteria_id') ?>"><button type="button" class="btn btn-default btn-outline">Batal</button></a>
                                        </div>
                                    </div>
                                </form>
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