<?php $this->load->view('components/header') ?>

<!-- Page -->
<div class="page">
    <div class="page-header">
        <h1 class="page-title">List Alternatif</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item active">Alternatif</li>
        </ol>
    </div>

    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-body">
                <script src="https://code.highcharts.com/highcharts.js"></script>
                <script src="https://code.highcharts.com/modules/exporting.js"></script>
                <script src="https://code.highcharts.com/modules/export-data.js"></script>
                <script src="https://code.highcharts.com/modules/accessibility.js"></script>

                <figure class="highcharts-figure">
                    <div id="container"></div>
                    <p class="highcharts-description">
                        A basic column chart compares rainfall values between four cities.
                        Tokyo has the overall highest amount of rainfall, followed by New York.
                        The chart is making use of the axis crosshair feature, to highlight
                        months as they are hovered over.
                    </p>
                </figure>

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
                <?php
                foreach ($alternatives as $key => $value) {
                    $division[] = $value->id_alternatif;
                    $nilai[] = $value->nilai;
                }
                ?>
                <script>
                    Highcharts.chart('container', {
                        chart: {
                            type: 'column'
                        },
                        title: {
                            text: 'Monthly Average Rainfall'
                        },
                        subtitle: {
                            text: 'Source: WorldClimate.com'
                        },
                        xAxis: {
                            categories: <?php echo json_encode($division) ?>,
                            crosshair: true
                        },
                        yAxis: {
                            min: 0,
                            title: {
                                text: 'Rainfall (mm)'
                            }
                        },
                        tooltip: {
                            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
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
                            name: 'Tokyo',
                            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

                        }]
                    });
                </script>
            </div>
        </div>
        <!-- End Panel Basic -->

    </div>
</div>
<!-- End Page -->