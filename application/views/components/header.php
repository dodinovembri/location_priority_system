<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    <?php
    $CI = &get_instance();
    $CI->load->model(['UserModel']);
    $user_id = $this->session->userdata('id');
    $user = $CI->UserModel->getById($user_id)->row();
    ?>
    <div class="navbar-header">
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle">
            <a href="<?php echo base_url('home') ?>">
                <img class="navbar-brand-logo" src="<?php echo base_url('assets/') ?>images/logo_dinkes.png" title="SPK">
                <span class="navbar-brand-text hidden-xs-down" style="color: white;"> SPK Lokasi Pembinaan</span>
            </a>
        </div>
    </div>

    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <!-- Navbar Toolbar -->
            <ul class="nav navbar-toolbar">
                <li class="nav-item hidden-float" id="toggleMenubar">
                    <a class="nav-link" data-toggle="menubar" href="#" role="button">
                        <i class="icon hamburger hamburger-arrow-left">
                            <span class="sr-only">Toggle menubar</span>
                            <span class="hamburger-bar"></span>
                        </i>
                    </a>
                </li>
            </ul>
            <!-- End Navbar Toolbar -->

            <!-- Navbar Toolbar Right -->
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="scale-up" role="button">
                        <span class="avatar avatar-online">
                            <img src="<?php echo base_url('uploads/user/'); echo $user->gambar; ?>" alt="...">
                            <i></i>
                        </span>
                    </a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="<?php echo base_url('profile') ?>" role="menuitem"><i class="icon md-account" aria-hidden="true"></i> Profile</a>
                        <a class="dropdown-item" href="<?php echo base_url('profile/setting') ?>" role="menuitem"><i class="icon md-settings" aria-hidden="true"></i> Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('logout') ?>" role="menuitem"><i class="icon md-power" aria-hidden="true"></i> Logout</a>
                    </div>
                </li>
            </ul>
            <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->

    </div>
</nav>
<div class="site-menubar site-menubar-light">
    <?php $this->load->view('components/sidebar') ?>
</div>