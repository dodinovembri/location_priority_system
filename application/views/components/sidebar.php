<div class="site-menubar-body">
    <div>
        <div>
            <ul class="site-menu" data-plugin="menu">
                <?php if ($this->session->userdata('role_id') == 1) { ?>
                    <li class="site-menu-category">Main</li>
                    <li class="site-menu-item <?php if ($this->uri->segment(1) == "home")  echo "active"; ?>">
                        <a href="<?php echo base_url('home') ?>">
                            <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="site-menu-item <?php if ($this->uri->segment(1) == "alternative_chart")  echo "active"; ?>">
                        <a href="<?php echo base_url('alternative_chart') ?>">
                            <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                            <span class="site-menu-title">Grafik Alternatif</span>
                        </a>
                    </li>
                    <li class="site-menu-item <?php if ($this->uri->segment(1) == "ranking")  echo "active"; ?>">
                        <a href="<?php echo base_url('ranking') ?>">
                            <i class="site-menu-icon md-google-pages" aria-hidden="true"></i>
                            <span class="site-menu-title">Rekomendasi Lokasi</span>
                        </a>
                    </li>
                    <li class="site-menu-category">Master</li>
                    <li class="site-menu-item <?php if ($this->uri->segment(1) == "criteria" || $this->uri->segment(1) == "criterion_values" || $this->uri->segment(1) == "criterion_value") echo "active"; ?>">
                        <a href="<?php echo base_url('criteria') ?>">
                            <i class="site-menu-icon md-border-all" aria-hidden="true"></i>
                            <span class="site-menu-title">Data Kriteria</span>
                        </a>
                    </li>
                <?php } elseif ($this->session->userdata('role_id') == 2) { ?>
                    <li class="site-menu-category">Main</li>
                    <li class="site-menu-item <?php if ($this->uri->segment(1) == "home")  echo "active"; ?>">
                        <a href="<?php echo base_url('home') ?>">
                            <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="site-menu-item <?php if ($this->uri->segment(1) == "alternative")  echo "active"; ?>">
                        <a href="<?php echo base_url('alternative') ?>">
                            <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                            <span class="site-menu-title">Puskesmas</span>
                        </a>
                    </li>
                    <li class="site-menu-item <?php if ($this->uri->segment(1) == "ranking_step")  echo "active"; ?>">
                        <a href="<?php echo base_url('ranking_step') ?>">
                            <i class="site-menu-icon md-google-pages" aria-hidden="true"></i>
                            <span class="site-menu-title">Perhitungan Data</span>
                        </a>
                    </li>
                    <li class="site-menu-item <?php if ($this->uri->segment(1) == "ranking")  echo "active"; ?>">
                        <a href="<?php echo base_url('ranking') ?>">
                            <i class="site-menu-icon md-google-pages" aria-hidden="true"></i>
                            <span class="site-menu-title">Rekomendasi Lokasi</span>
                        </a>
                    </li>
                    <li class="site-menu-category">Master</li>
                    <li class="site-menu-item <?php if ($this->uri->segment(1) == "criteria" || $this->uri->segment(1) == "criterion_values" || $this->uri->segment(1) == "criterion_value") echo "active"; ?>">
                        <a href="<?php echo base_url('criteria') ?>">
                            <i class="site-menu-icon md-border-all" aria-hidden="true"></i>
                            <span class="site-menu-title">Data Kriteria</span>
                        </a>
                    </li>
                    <li class="site-menu-item <?php if ($this->uri->segment(1) == "user")  echo "active"; ?>">
                        <a href="<?php echo base_url('user') ?>">
                            <i class="site-menu-icon md-border-all" aria-hidden="true"></i>
                            <span class="site-menu-title">Kelola Data User</span>
                        </a>
                    </li>
                    <li class="site-menu-category">Laporan</li>
                    <li class="site-menu-item <?php if ($this->uri->segment(1) == "alternative_value_report") echo "active"; ?>">
                        <a href="<?php echo base_url('alternative_value_report') ?>">
                            <i class="site-menu-icon md-border-all" aria-hidden="true"></i>
                            <span class="site-menu-title">Data Nilai Puskesmas</span>
                        </a>
                    </li>
                <?php } elseif ($this->session->userdata('role_id') == 3) { ?>
                    <li class="site-menu-category">Main</li>
                    <li class="site-menu-item <?php if ($this->uri->segment(1) == "home")  echo "active"; ?>">
                        <a href="<?php echo base_url('home') ?>">
                            <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>
                        </a>
                    </li>                    
                    <li class="site-menu-item <?php if ($this->uri->segment(1) == "alternative_profile" && $this->uri->segment(2) != "value")  echo "active"; ?>">
                        <a href="<?php echo base_url('alternative_profile') ?>">
                            <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                            <span class="site-menu-title">Profile Puskesmas</span>
                        </a>
                    </li>    
                    <li class="site-menu-item <?php if ($this->uri->segment(2) == "value")  echo "active"; ?>">
                        <a href="<?php echo base_url('alternative_profile/value') ?>">
                            <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                            <span class="site-menu-title">Nilai Puskesmas</span>
                        </a>
                    </li>                                    
                <?php } ?>

            </ul>
        </div>
    </div>
</div>