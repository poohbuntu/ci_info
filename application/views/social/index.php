<?php $this->load->view('layout'); ?>
<div class="col-md-10">
    <div class="well">
        <h1>
            โครงการบริการวิชาการสู่สังคม
        </h1>
        <form class="form-inline" action="<?=base_url()?>socials/show_table" method="post">
            <div class="form-group">
                <label for="year">ปีงบประมาณ</label>
                <select class="form-control" name="year">
                    <?php
                        foreach ($years as $row) {
                            echo '<option value="'.$row->year.'">'.$row->year.'</option>';
                        }
                    ?>
                </select>
            </div>
            <button class="btn btn-info" type="submit" name="show_chart">ค้นหา</button>
        </form>
    </div>
</div>
<div class="col-md-10">
    <script type="text/javascript">
        $(function () {
            $('#container').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'ข้อมูลจำนวนงานบริการวิชาการ'
                },
                xAxis: {
                    categories: <?php echo $categories_data; ?>
                },
                yAxis: {
                    title: {
                        text: 'จำนวนงาน'
                    }
                },
                series: <?php echo $series_data; ?>
            });
        });
    </script>
    <div id="container" style="width:100%; height:400px;">
    </div>
</div>
