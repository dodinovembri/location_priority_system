<?php $this->load->view('components/header') ?>
<!-- Page -->
<div class="page">
    <div class="page-header">
        <h1 class="page-title">Profile</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item active">My Profile</li>
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
                                <form method="post" action="<?php echo base_url('profile/update/'); echo $profile->id; ?>" enctype="multipart/form-data">
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Nama </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="name" value="<?php echo $profile->name; ?>" placeholder="Masukkan Nama" autocomplete="off" required />
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Email </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="email" value="<?php echo $profile->email; ?>" placeholder="Masukkan Email" autocomplete="off" required />
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Gambar </label>
                                        <div class="col-md-9">
                                            <img src="<?php echo base_url('uploads/user/'); echo $profile->gambar; ?>" width="50px" alt="">
                                            <i class="icon md-upload" aria-hidden="true"></i>
                                            <input type="file" class="form-control" name="image"  autocomplete="off" />
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="form-group form-material row" >
                                    <label class="col-md-3 col-form-label"></label>
                                        <div class="col-md-9">
                                            <button type="submit" class="btn btn-primary">Simpan </button>
                                            <a href="<?php echo base_url('user') ?>"><button type="button" class="btn btn-default btn-outline">Batal</button></a>
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