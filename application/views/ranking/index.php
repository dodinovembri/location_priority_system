<?php $this->load->view('components/header') ?>

<?php $this->load->view('components/header_datatables_requirements') ?>

<!-- Page -->
<div class="page">
    <div class="page-header">
        <h1 class="page-title">Ranking</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item active">Ranking</li>
        </ol>
    </div>

    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Ranking</th>
                            <th>Kode Alternatif</th>
                            <th>Nama Alternatif</th>
                            <th>Preferensi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($final_results as $key => $value) {
                            $no++;
                            $id_alternatif = $value['id_alternatif'];
                            $sql = "SELECT * FROM alternatif WHERE id = $id_alternatif";
                            $query = $this->db->query($sql);
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $query->row()->kode_alternatif; ?></td>
                                <td><?php echo $query->row()->nama_alternatif; ?></td>
                                <td><?php echo round($value['preferensi'], 4); ?></td>
                            </tr>
                            <!-- End Modal -->
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>
</div>
<!-- End Page -->

<?php $this->load->view('components/footer_datatables_requirements') ?>