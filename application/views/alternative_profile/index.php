<?php $this->load->view('components/header') ?>
<!-- Page -->
<div class="page">
    <div class="page-header">
        <h1 class="page-title">Profil Puskesmas</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item active">Profil Puskesmas</li>
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
                                <?php $this->load->view('components/flash') ?>
                                <form method="post" action="<?php echo base_url('alternative_profile/update/'); echo $alternative->id; ?>" enctype="multipart/form-data">
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
                                        <label class="col-md-3 col-form-label">Email </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="email" value="<?php echo $alternative->email ?>" placeholder="Masukkan Email Alternatif" autocomplete="off" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">No Telepon </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="no_telepon" value="<?php echo $alternative->no_telepon ?>" placeholder="Masukkan Nomor Telepon" autocomplete="off" required />
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Keterangan </label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="keterangan" rows="3" placeholder="Masukkan Keterangan"><?php echo $alternative->keterangan ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Alamat </label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="alamat" rows="3" placeholder="Masukkan Alamat"><?php echo $alternative->alamat ?></textarea>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="form-group form-material row" >
                                    <label class="col-md-3 col-form-label"></label>
                                        <div class="col-md-9">
                                            <button type="submit" class="btn btn-primary">Simpan </button>
                                            <a href="<?php echo base_url('home') ?>"><button type="button" class="btn btn-default btn-outline">Batal</button></a>
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