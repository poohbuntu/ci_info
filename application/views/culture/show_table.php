<?php $this->load->view('layout'); ?>
<div class="col-md-10">
    <div class="well">
        <h1>
            โครงการทำนุบำรุงศิลปะและวัฒนธรรม
        </h1>
        <form class="form-inline" action="<?=base_url()?>cultures/show_table" method="post">
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
    <div class="col-md-10">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>
                        กิจกรรม
                    </th>
                    <th>
                        ระยะเวลา
                    </th>
                    <th>
                        จำนวนผู้เข้าร่วม
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($culture as $row) {
                        echo "<tr>";
                        echo "<td>$row->title</td>";
                        echo "<td>$row->period</td>";
                        echo "<td>$row->participants</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
