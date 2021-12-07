<?php $this->load->view('components/header') ?>
<!-- Page -->
<div class="page">
    <div class="page-header">
        <h1 class="page-title">Tambah User</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('user') ?>">User</a></li>
            <li class="breadcrumb-item active">Tambah User</li>
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
                                <form method="post" action="<?php echo base_url('user/store') ?>" enctype="multipart/form-data">
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Nama </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="name" placeholder="Masukkan Nama" autocomplete="off" required />
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Email </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="email" placeholder="Masukkan Email" autocomplete="off" required />
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Gambar </label>
                                        <div class="col-md-9">
                                            <i class="icon md-upload" aria-hidden="true"></i>
                                            <input type="file" class="form-control" name="image" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Role </label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="role_id" id="" required>
                                                <option value="">Select</option>
                                                <option value="1">Kepala Seksi</option>
                                                <option value="2">Staff Dinas Kesehatan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Password </label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" name="password" id="pass" placeholder="Masukkan Password" style="width: 90%; display:inline-block" autocomplete="off" required />
                                            &nbsp;<span id="mybutton" onclick="change()"><i class="icon md-eye" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group form-material row">
                                        <label class="col-md-3 col-form-label">Password Konfirmasi </label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" name="password_confirm" id="pass2" style="width: 90%; display:inline-block" placeholder="Masukkan Password Konfirmasi" autocomplete="off" required />
                                            &nbsp;<span id="mybutton2" onclick="change2()"><i class="icon md-eye" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    <script>
                                        function change() {
                                            var x = document.getElementById('pass').type;

                                            if (x == 'password') {
                                                document.getElementById('pass').type = 'text';
                                                document.getElementById('mybutton').innerHTML = '<i class="icon md-eye-off"></i>';
                                            } else {
                                                document.getElementById('pass').type = 'password';
                                                document.getElementById('mybutton').innerHTML = '<i class="icon md-eye"></i>';
                                            }
                                        }

                                        function change2() {
                                            var x = document.getElementById('pass2').type;

                                            if (x == 'password') {
                                                document.getElementById('pass2').type = 'text';
                                                document.getElementById('mybutton2').innerHTML = '<i class="icon md-eye-off"></i>';
                                            } else {
                                                document.getElementById('pass2').type = 'password';
                                                document.getElementById('mybutton2').innerHTML = '<i class="icon md-eye"></i>';
                                            }
                                        }
                                    </script>
                                    <br><br>
                                    <div class="form-group form-material row">
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