<?php $this->load->view('layout'); ?>
<div class="col-md-10">
    <div class="well">
        <h1>
            ข้อมูลการลา
        </h1>
        <form class="form-inline" action="<?=base_url()?>activities/show_table" method="post">
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
                    <th colspan="3">
                        ชื่อ
                    </th>
                    <th>
                        ประเภท
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($vacation as $row) {
                        echo "<tr>";
                        echo "<td>$row->name</td>";
                        echo "<td>$row->name2</td>";
                        echo "<td>$row->name3</td>";
                        echo "<td>$row->type</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
