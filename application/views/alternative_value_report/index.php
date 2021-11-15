<?php $this->load->view('components/header') ?>

<?php $this->load->view('components/header_datatables_requirements') ?>

<!-- Page -->
<div class="page">
    <div class="page-header">
        <h1 class="page-title">Laporan Nilai Puskesmas</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item active">Laporan Nilai Puskesmas</li>
        </ol>
    </div>

    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <table id="example" class="display">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Puskesmas</th>
                            <th>Nama Puskesmas</th>
                            <?php foreach ($criterias as $key => $value) { ?>
                                <th><?php echo $value->kode_kriteria; ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($alternatives as $key => $value) {
                            $no++;
                            $id_alternatif = $value->id;
                            $sql = "SELECT * FROM nilai_alternatif WHERE `id_alternatif` = $id_alternatif";
                            $query = $this->db->query($sql);
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $value->kode_alternatif; ?></td>
                                <td><?php echo $value->nama_alternatif; ?></td>
                                <?php foreach ($query->result() as $key2 => $value2) { ?>
                                    <td><?php echo $value2->nilai; ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="panel">
            <div class="panel-body">
                <p>Keterangan</p>
               <ul>
                   <?php foreach ($criterias as $key => $value) { ?>
                        <li><?php echo $value->kode_kriteria. " = " . $value->nama_kriteria ?></li>
                   <?php } ?>
               </ul>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>
</div>
<!-- End Page -->

<?php $this->load->view('components/footer_datatables_requirements') ?>