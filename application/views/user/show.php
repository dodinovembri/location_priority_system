<?php $this->load->view('components/header') ?>
<!-- Page -->
<div class="page">
    <div class="page-header">
        <h1 class="page-title">Detail User</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('user') ?>">User</a></li>
            <li class="breadcrumb-item active">Detail User</li>
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
                                        <label class="col-md-3 col-form-label">Nama </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="<?php echo $user->name ?>" autocomplete="off" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Email </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="<?php echo $user->email ?>" autocomplete="off" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Role </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="<?php echo check_role($user->role_id) ?>" autocomplete="off" readonly />
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label"></label>
                                        <div class="col-md-9">
                                            <a href="<?php echo base_url('user') ?>"><button type="button" class="btn btn-default btn-outline">Kembali</button></a>
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