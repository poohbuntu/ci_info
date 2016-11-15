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
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>
                        ชื่อบทความวิจัย
                    </th>
                    <th>
                        ชื่อวารสาร
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($research as $row) {
                        echo "<tr>";
                        echo "<td>$row->subject</td>";
                        echo "<td>$row->journal</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
