<div class="site-menubar-body">
    <div>
        <div>
            <ul class="site-menu" data-plugin="menu">
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
                        <span class="site-menu-title">Alternatif</span>
                    </a>
                </li>
                <li class="site-menu-item">
                    <a href="<?php echo base_url('alternative') ?>">
                        <i class="site-menu-icon md-google-pages" aria-hidden="true"></i>
                        <span class="site-menu-title">Ranking</span>
                    </a>
                </li>
                <li class="site-menu-category">Master</li>
                <li class="site-menu-item <?php if ($this->uri->segment(1) == "criteria")  echo "active"; ?>">
                    <a href="<?php echo base_url('criteria') ?>">
                        <i class="site-menu-icon md-border-all" aria-hidden="true"></i>
                        <span class="site-menu-title">Kelola Kriteria</span>
                    </a>
                </li>
                <li class="site-menu-item <?php if ($this->uri->segment(1) == "user")  echo "active"; ?>">
                    <a href="<?php echo base_url('user') ?>">
                        <i class="site-menu-icon md-border-all" aria-hidden="true"></i>
                        <span class="site-menu-title">Kelola User</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
