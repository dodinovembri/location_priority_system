<?php if ($this->session->flashdata('success')) { ?>
    <div class="alert dark alert-icon alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <i class="icon md-check" aria-hidden="true"></i>
        <?php
        echo $this->session->flashdata('success');
        $this->session->unset_userdata('success');
        ?>
    </div>
<?php } elseif ($this->session->flashdata('warning')) { ?>

    <div class="alert dark alert-icon alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <?php
        echo $this->session->flashdata('warning');
        $this->session->unset_userdata('warning');
        ?>
    </div>
        
<?php } ?>