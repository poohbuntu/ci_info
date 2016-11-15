<?php $this->load->view('layout'); ?>
<div class="col-md-10">
    <div class="well">
        <h1>
            ข้อมูลเงินงบประมาณ
        </h1>
        <form class="form-inline" action="<?=base_url()?>budgets/show_chart" method="post">
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
