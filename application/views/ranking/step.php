<?php $this->load->view('components/header') ?>

<?php $this->load->view('components/header_datatables_requirements') ?>

<!-- Page -->
<div class="page">
    <div class="page-header">
        <h1 class="page-title">Perhitungan Data</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item active">Perhitungan Data</li>
        </ol>
    </div>

    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <h3>Data Laporan Kriteria</h3>
                <div style="overflow-x:auto;">
                <table id="example1" class="display" style="width:100%">
                    <thead>
                        <tr>
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
        </div>
        <!-- End Panel Basic -->

    </div>

    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <h3>Data Nilai Konversi Kriteria</h3>
                <div style="overflow-x:auto;">
                <table id="example2" class="display" style="width:100%">
                    <thead>
                        <tr>
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
                            $data = [];
                            foreach ($alternative_values as $key2 => $value2) {
                                if ($id_alternatif == $value2->id_alternatif) {
                                    array_push($data, $value2->nilai);
                                }
                            }
                            
                        ?>
                            <tr>
                                <td><?php echo $value->nama_alternatif; ?></td>
                                <?php foreach ($data as $key3 => $value3) { ?>
                                    <td><?php echo $value3; ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>

    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <h3>Table Pembagi</h3>
                <div style="overflow-x:auto;">
                <table id="example3" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Cj</th>
                            <?php foreach ($criterias as $key => $value) { ?>
                                <th><?php echo $value->kode_kriteria; ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>Hasil Kuadrat</td>
                                <?php foreach ($devider as $key3 => $value3) { ?>
                                    <td><?php echo $value3['nilai']; ?></td>
                                <?php } ?>
                            </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>


    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <h3>Hasil Matriks Keputusan Ternormalisasi</h3>
                <div style="overflow-x:auto;">
                <table id="example4" class="display" style="width:100%">
                    <thead>
                        <tr>
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
                            $data = [];
                            foreach ($alternative_values_normalized as $key2 => $value2) {
                                if ($id_alternatif == $value2['id_alternatif']) {
                                    array_push($data, $value2['hasil_bagi']);
                                }
                            }
                            
                        ?>
                            <tr>
                                <td><?php echo $value->nama_alternatif; ?></td>
                                <?php foreach ($data as $key3 => $value3) { ?>
                                    <td><?php echo $value3; ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>

    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <h3>Matriks Keputusan Ternormalisasi Terbobot</h3>
                <div style="overflow-x:auto;">
                <table id="example11" class="display" style="width:100%">
                    <thead>
                        <tr>
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
                            $data = [];
                            foreach ($alternative_after_multiple as $key2 => $value2) {
                                if ($id_alternatif == $value2['id_alternatif']) {
                                    array_push($data, $value2['hasil_kali']);
                                }
                            }
                            
                        ?>
                            <tr>
                                <td><?php echo $value->nama_alternatif; ?></td>
                                <?php foreach ($data as $key3 => $value3) { ?>
                                    <td><?php echo $value3; ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>

    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <h3>Matriks Solusi Ideal Positif dan Matriks Solusi Ideal Negatif </h3>
                <div style="overflow-x:auto;">
                <table id="example7" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Solusi Ideal</th>
                            <?php foreach ($criterias as $key => $value) { ?>
                                <th><?php echo $value->kode_kriteria; ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>Solusi Ideal Positif (A+)</td>
                                <?php foreach ($a_positive as $key3 => $value3) { ?>
                                    <td><?php echo $value3; ?></td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td>Solusi Ideal Negatif (A-)</td>
                                <?php foreach ($a_negative as $key3 => $value3) { ?>
                                    <td><?php echo $value3; ?></td>
                                <?php } ?>
                            </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>

    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <h3>Jarak Alternatif Solusi Ideal Positif dan Solusi Ideal Negatif </h3>
                <div style="overflow-x:auto;">
                <table id="example9" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Kode Alternatif</th>
                            <th>Nama Alternatif</th>
                            <th>D Positif</th>
                            <th>D Negatif</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($d_solution as $key => $value) {
                            $no++;
                            $id_alternatif = $value['id_alternatif'];
                            $sql = "SELECT * FROM alternatif WHERE id = $id_alternatif";
                            $query = $this->db->query($sql);
                        ?>
                            <tr>
                                <td><?php echo $query->row()->kode_alternatif; ?></td>
                                <td><?php echo $query->row()->nama_alternatif; ?></td>
                                <td><?php echo $value['d_positif']; ?></td>
                                <td><?php echo $value['d_negatif']; ?></td>
                            </tr>
                            <!-- End Modal -->
                        <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>

    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <h3>Hasil Perhitungan Nilai Preferensi </h3>
                <div style="overflow-x:auto;">
                <table id="example10" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Kode Alternatif</th>
                            <th>Nama Alternatif</th>
                            <th>Preferensi</th>
                            <th>Ranking</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($final_results as $key => $value1) {
                            $no++;
                            $id_alternatif = $value1['id_alternatif'];
                            $sql = "SELECT * FROM alternatif WHERE id = $id_alternatif";
                            $query = $this->db->query($sql);

                            foreach ($final_resultss as $key => $value) {
                                if ($id_alternatif == $value['id_alternatif']) {
                                    $ranking = $key + 1;
                                }
                            }
                        ?>
                            <tr>
                                <td><?php echo $query->row()->kode_alternatif; ?></td>
                                <td><?php echo $query->row()->nama_alternatif; ?></td>
                                <td><?php echo round($value1['preferensi'], 4); ?></td>
                                <td><?php echo $ranking; ?></td>
                            </tr>
                            <!-- End Modal -->
                        <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>
</div>
<!-- End Page -->

<?php $this->load->view('components/footer_datatables_requirements') ?>