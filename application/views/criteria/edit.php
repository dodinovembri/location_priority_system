<?php $this->load->view('components/header') ?>
<!-- Page -->
<div class="page">
    <div class="page-header">
        <h1 class="page-title">Edit Kriteria</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('criteria') ?>">Kriteria</a></li>
            <li class="breadcrumb-item active">Edit Kritria</li>
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
                                <form method="post" action="<?php echo base_url('criteria/update/');
                                                            echo $criteria->id; ?>">
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Kode Kriteria </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="kode_kriteria" value="<?php echo $criteria->kode_kriteria ?>" placeholder="Masukkan Kode Kriteria" autocomplete="off" required />
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Nama Kriteria </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="nama_kriteria" value="<?php echo $criteria->nama_kriteria ?>" placeholder="Masukkan Nama Kriteria" autocomplete="off" required />
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Jenis Kriteria </label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="jenis_kriteria" id="" required>
                                                <option value="<?php echo $criteria->jenis_kriteria; ?>"><?php echo $criteria->jenis_kriteria; ?></option>
                                                <option value="Benefit">Benefit</option>
                                                <option value="Cost">Cost</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Bobot Kriteria </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="bobot" value="<?php 
                                            $nilai_output = substr($criteria->bobot,-2);
                                            if($nilai_output == "00"){
                                                echo number_format($criteria->bobot,0,",",".");
                                            }else{
                                                echo $criteria->bobot;
                                            } ?>" placeholder="Masukkan Bobot Kriteria" autocomplete="off" required />
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Keterangan </label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="keterangan" rows="3" placeholder="Masukkan Keterangan"><?php echo $criteria->keterangan ?></textarea>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label"></label>
                                        <div class="col-md-9">
                                            <button type="submit" class="btn btn-primary">Simpan </button>
                                            <a href="<?php echo base_url('criteria') ?>"><button type="button" class="btn btn-default btn-outline">Batal</button></a>
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