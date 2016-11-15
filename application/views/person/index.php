<?php $this->load->view('layout'); ?>
<div class="col-md-10">
    <div class="well">
        <h1>
            ข้อมูลบุคลากร
        </h1>
        <!--<form class="form-inline" action="<?=base_url()?>researchs/show_table" method="post">
            <div class="form-group">
                <label for="year">วุฒิการศึกษา</label>
                <select class="form-control" name="year">
                    <?php
                        foreach ($years as $row) {
                            echo '<option value="'.$row->year.'">'.$row->year.'</option>';
                        }
                    ?>
                </select>
            </div>
            <button class="btn btn-info" type="submit" name="show_chart">ค้นหา</button>
        </form>-->
    </div>
</div>
<div class="col-md-10">
    <div class="well">
    <script type="text/javascript">
        $(function () {
            $('#container').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'แยกตามสังกัด'
                },
                xAxis: {
                    categories: <?php echo $categories_data; ?>
                },
                yAxis: {
                    title: {
                        text: 'จำนวนคน'
                    },
                    tickInterval: 1
                },
                series: <?php echo $series_data; ?>
            });
        });
    </script>
    <div id="container" style="width:100%; height:600px;">
    </div>
    </div>
</div>

<div class="col-md-10">
    <div class="well">
    <script type="text/javascript">
        $(function () {
            $('#container2').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'แยกตามวุฒิการศึกษา'
                },
                xAxis: {
                    categories: <?php echo $categories_data2; ?>
                },
                yAxis: {
                    title: {
                        text: 'จำนวนคน'
                    },
                    tickInterval: 1
                },
                series: <?php echo $series_data2; ?>
            });
        });
    </script>
    <div id="container2" style="width:100%; height:600px;">
    </div>
    </div>
</div>

<div class="col-md-10">
    <div class="well">
    <script type="text/javascript">
        $(function () {
            $('#container3').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'แยกตามเพศ'
                },
                xAxis: {
                    categories: <?php echo $categories_data3; ?>
                },
                yAxis: {
                    title: {
                        text: 'จำนวนคน'
                    },
                    tickInterval: 1
                },
                series: <?php echo $series_data3; ?>
            });
        });
    </script>
    <div id="container3" style="width:100%; height:600px;">
    </div>
    </div>
</div>
