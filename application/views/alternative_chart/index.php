<?php $this->load->view('components/header') ?>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<style>
    .highcharts-figure,
    .highcharts-data-table table {
        min-width: 310px;
        max-width: 800px;
        margin: 1em auto;
    }

    #container {
        height: 400px;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #ebebeb;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }

    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }

    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
        padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
        background: #f1f7ff;
    }
</style>

<!-- Page -->
<div class="page">
    <div class="page-header">
        <h1 class="page-title">Grafik Alternatif</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item active">Grafik Alternatif</li>
        </ol>
    </div>

    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <?php foreach ($criterias as $key2 => $value2) { ?>
                        <div class="col-md-6">
                            <figure class="highcharts-figure">
                                <div id="container<?php echo $key2; ?>"></div>
                            </figure>

                            <?php
                            $CI = &get_instance();
                            $CI->load->model(['AlternativeValueModel']);
                            $alternatives = $CI->AlternativeValueModel->getByCriteriaId($value2->id)->result();

                            ?>
                            <?php 
                                $alt_names_all = [];
                                foreach ($alternatives as $key => $value) {
                                $CI->load->model(['AlternativeModel']);
                                $alt_name = $CI->AlternativeModel->getById($value->id_alternatif)->row();

                                array_push($alt_names_all, $alt_name->nama_alternatif);


                             }  ?>
                            <script>
                                Highcharts.chart('container<?php echo json_encode($key2); ?>', {
                                    chart: {
                                        type: 'column'
                                    },
                                    title: {
                                        text: '<?php echo $value2->nama_kriteria ?>'
                                    },
                                    xAxis: {
                                        categories:<?php echo json_encode($alt_names_all); ?>,
                                        crosshair: true
                                    },
                                    yAxis: {
                                        min: 0,
                                        title: {
                                            text: 'Nilai'
                                        }
                                    },
                                    tooltip: {
                                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                                        footerFormat: '</table>',
                                        shared: true,
                                        useHTML: true
                                    },
                                    plotOptions: {
                                        column: {
                                            pointPadding: 0.2,
                                            borderWidth: 0
                                        }
                                    },
                                    series: [{
                                        name: 'Alternatif ',
                                        data: [
                                            <?php foreach ($alternatives as $key => $value) {
                                                $CI->load->model(['AlternativeModel']);
                                                $alternative = $CI->AlternativeModel->getById($value->id_alternatif)->row();

                                                $alternative_name = $alternative->nama_alternatif;
                                                $nilai = $value->nilai;

                                            ?> {
                                                    name: <?php echo json_encode($alternative_name); ?>,
                                                    y: <?php echo $nilai ?>
                                                },

                                            <?php } ?>
                                        ]
                                    }]
                                });
                            </script>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>
</div>
<!-- End Page -->