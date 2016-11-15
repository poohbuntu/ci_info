<?php $this->load->view('layout'); ?>
<div class="col-md-10">
    <div class="well">
        <h1>
            ข้อมูลงานวิจัย
        </h1>
        <form class="form-inline" action="<?=base_url()?>researchs/show_table" method="post">
            <div class="form-group">
                <label for="year">ปีที่เผยแพร่</label>
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
                    text: 'ข้อมูลจำนวนงานวิจัย'
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
