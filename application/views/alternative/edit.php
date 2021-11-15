<?php $this->load->view('components/header') ?>
<!-- Page -->
<div class="page">
    <div class="page-header">
        <h1 class="page-title">Edit Nilai Kriteria Puskesmas</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('alternative') ?>">Alternatif</a></li>
            <li class="breadcrumb-item active">Edit Nilai Kriteria Puskesmas</li>
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
                                <form method="post" action="<?php echo base_url('alternative/update/');
                                                            echo $alternative->id; ?>">
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Kode Alternatif </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="kode_alternatif" value="<?php echo $alternative->kode_alternatif ?>" placeholder="Masukkan Kode Alternatif" autocomplete="off" required />
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Nama Alternatif </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="nama_alternatif" value="<?php echo $alternative->nama_alternatif ?>" placeholder="Masukkan Nama Alternatif" autocomplete="off" required />
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Keterangan </label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="keterangan" rows="3" placeholder="Masukkan Keterangan"><?php echo $alternative->keterangan ?></textarea>
                                        </div>
                                    </div>
                                    <?php foreach ($criteria_alternative as $key => $value) { ?>
                                        <div class="form-group form-material row">
                                            <label class="col-md-3 col-form-label"><?php echo $value->nama_kriteria; ?> </label>
                                            <div class="col-md-9">
                                                <input type="hidden" name="criteria_id[]" value="<?php echo $value->id_kriteria; ?>">
                                                <input type="text" class="form-control" name="criteria_alternative[]" value="<?php echo $value->nilai_alternatif; ?>" placeholder="Masukkan nilai" autocomplete="off" required />
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <br><br>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label"></label>
                                        <div class="col-md-9">
                                            <button type="submit" class="btn btn-primary">Simpan </button>
                                            <a href="<?php echo base_url('alternative') ?>"><button type="button" class="btn btn-default btn-outline">Batal</button></a>
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