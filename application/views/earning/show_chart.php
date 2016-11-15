<?php $this->load->view('layout'); ?>
<div class="col-md-10">
    <div class="well">
        <h1>
            ข้อมูลเงินรายได้ ปี<?php echo $year_data; ?>
            ไตรมาสที่<?php echo $quarter_data; ?>
        </h1>
        <form class="form-inline" action="<?=base_url()?>earnings/show_chart" method="post">
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
            <div class="form-group">
                <label for="quarter">ไตรมาสที่</label>
                <select class="form-control" name="quarter">
                    <?php
                        foreach ($quarters as $row) {
                            echo '<option value="'.$row->id.'">'.$row->quarter.'</option>';
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
                    text: 'ข้อมูลเงินรายได้'
                },
                xAxis: {
                    categories: <?php echo $categories_data; ?>
                },
                yAxis: {
                    title: {
                        text: 'จำนวนเงิน'
                    }
                },
                series: <?php echo $series_data; ?>
            });
        });
    </script>
    <div id="container" style="width:100%; height:400px;">
    </div>
</div>
