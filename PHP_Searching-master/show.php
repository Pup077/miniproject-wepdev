<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table  class="table table-striped" border="1" cellpadding="0"  cellspacing="0" align="center">
                <thead>
                    <tr class="table-primary">
                        <th width="20%">จังหวัด</th>
                        <th width="50%">ชื่อสถานที่</th>
                        <th width="10%">จองวัคซีน</th>
                    </tr>
                </thead>
                <?php
                echo '<font color="red">';   
                echo 'คำค้น = ';
                echo $_GET['q'];
                echo '</font>';
                echo '<br/>';             
                $sql = "SELECT * FROM tbl_search
                    WHERE title LIKE '%$q%' OR detail LIKE '%$q%'
                 ORDER BY id DESC";
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_array($result)) {
                                    
                ?>
                <tr>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['detail'];?></td>
                    <td><a href="insert.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">จองวัคซีน</a></td>
                </tr>
            <?php } ?>
            </table>
        <?php mysqli_close($con);?>
    </div>
</div>
</div>