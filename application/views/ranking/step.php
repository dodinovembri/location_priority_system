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
                <h3>Data Laporan</h3>
                <table id="example1" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Ranking</th>
                            <th>Kode Alternatif</th>
                            <th>Nama Alternatif</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($alternatives as $key => $value) {
                            $no++;
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $value->kode_alternatif; ?></td>
                                <td><?php echo $value->nama_alternatif; ?></td>
                                <td><?php echo $value->keterangan; ?></td>
                            </tr>
                            <!-- End Modal -->
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>

    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <h3>Data Konversi</h3>
                <table id="example2" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID Alternatif</th>
                            <th>ID Kriteria</th>
                            <th>ID Nilai Kriteria</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($alternative_values as $key => $value) {
                            $no++;
                        ?>
                            <tr>
                                <td><?php echo $value->id_alternatif; ?></td>
                                <td><?php echo $value->id_kriteria; ?></td>
                                <td><?php echo $value->id_nilai_kriteria; ?></td>
                                <td><?php echo $value->nilai; ?></td>
                            </tr>
                            <!-- End Modal -->
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>

    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <h3>Pembagi</h3>
                <table id="example3" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID Kriteria</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($devider as $key => $value) {
                            $no++;
                        ?>
                            <tr>
                                <td><?php echo $value['id_kriteria']; ?></td>
                                <td><?php echo $value['nilai']; ?></td>
                            </tr>
                            <!-- End Modal -->
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>


    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <h3>Matrik Ternormalisasi</h3>
                <table id="example4" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Kode Alternatif</th>
                            <th>Nama Alternatif</th>
                            <th>Preferensi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($alternative_values_normalized as $key => $value) {
                            $no++;
                            $id_alternatif = $value['id_alternatif'];
                            $sql = "SELECT * FROM alternatif WHERE id = $id_alternatif";
                            $query = $this->db->query($sql);
                        ?>
                            <tr>
                                <td><?php echo $query->row()->kode_alternatif; ?></td>
                                <td><?php echo $query->row()->nama_alternatif; ?></td>
                                <td><?php echo $value['hasil_bagi']; ?></td>
                            </tr>
                            <!-- End Modal -->
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>

    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <h3>Bobot</h3>
                <table id="example5" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Ranking</th>
                            <th>Kode Kriteria</th>
                            <th>Nama Kriteria</th>
                            <th>Bobot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($weights as $key => $value) {
                            $no++;
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $value->kode_kriteria; ?></td>
                                <td><?php echo $value->nama_kriteria; ?></td>
                                <td><?php echo $value->bobot; ?></td>
                            </tr>
                            <!-- End Modal -->
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>

    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <h3>Bobot Ternormalisasi</h3>
                <table id="example6" class="display" style="width:100%">
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
                        foreach ($alternative_after_multiple as $key => $value) {
                            $no++;
                            $id_alternatif = $value['id_alternatif'];
                            $sql = "SELECT * FROM alternatif WHERE id = $id_alternatif";
                            $query = $this->db->query($sql);
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $query->row()->kode_alternatif; ?></td>
                                <td><?php echo $query->row()->nama_alternatif; ?></td>
                                <td><?php echo $value['hasil_kali']; ?></td>
                            </tr>
                            <!-- End Modal -->
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>

    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <h3>A+</h3>
                <table id="example7" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>A Positif</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($a_positive as $key => $value) {
                            $no++;
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $value; ?></td>
                            </tr>
                            <!-- End Modal -->
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>

    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <h3>A-</h3>
                <table id="example8" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>A Negatif</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($a_negative as $key => $value) {
                            $no++;
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $value; ?></td>
                            </tr>
                            <!-- End Modal -->
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>
    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <h3>D Solution</h3>
                <table id="example9" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Ranking</th>
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
                                <td><?php echo $no; ?></td>
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
        <!-- End Panel Basic -->

    </div>

    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <?php $this->load->view('components/flash') ?>
                <h3>Hasil Preferensi</h3>
                <table id="example10" class="display" style="width:100%">
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
                                <td><?php echo $value['preferensi']; ?></td>
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