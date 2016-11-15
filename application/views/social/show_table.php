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
    <div class="col-md-10">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>
                        โครงการ
                    </th>
                    <th>
                        กลุ่มเป้าหมาย
                    </th>
                    <th>
                        การบูรณาการ
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($social as $row) {
                        echo "<tr>";
                        echo "<td>$row->project</td>";
                        echo "<td>$row->target</td>";
                        echo "<td>$row->integration</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
