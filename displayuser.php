<!doctype html>
<html>
<head>
    <?php
    include("database.php");

    $rowperpage = 5;
    $row = 0;

    // Previous Button
    if(isset($_POST['but_prev'])){
        $row = $_POST['row'];
        $row -= $rowperpage;
        if( $row < 0 ){
            $row = 0;
        }
    }

    // Next Button
    if(isset($_POST['but_next'])){
        $row = $_POST['row'];
        $allcount = $_POST['allcount'];

        $val = $row + $rowperpage;
        if( $val < $allcount ){
            $row = $val;
        }
    }

    // generating orderby and sort url for table header
    function sortorder($fieldname){
        $sorturl = "?order_by=".$fieldname."&sort=";
        $sorttype = "asc";
        if(isset($_GET['order_by']) && $_GET['order_by'] == $fieldname){
            if(isset($_GET['sort']) && $_GET['sort'] == "asc"){
                $sorttype = "desc";
            }
        }
        $sorturl .= $sorttype;
        return $sorturl;
    }
    ?>
</head>
<body>
<div id="content">
    <table width="100%" id="emp_table" border="0">
        <tr class="tr_header">
            <th>S.no</th>
            <th ><a href="<?php echo sortorder('first_name'); ?>" class="sort">Name</a></th>
            <th ><a href="<?php echo sortorder('last_name'); ?>" class="sort">Salary</a></th>
            <th ><a href="<?php echo sortorder('alamat'); ?>" class="sort">Gender</a></th>
            <th ><a href="<?php echo sortorder('telnum'); ?>" class="sort">City</a></th>
            <th ><a href="<?php echo sortorder('email'); ?>" class="sort">Email</a></th>
        </tr>
        <?php
        // count total number of rows
        $sql = "SELECT COUNT(*) AS cntrows FROM users";
        $result = mysqli_query($conn,$sql);
        $fetchresult = mysqli_fetch_array($result);
        $allcount = $fetchresult['cntrows'];

        // selecting rows
        $orderby = " ORDER BY id desc ";
        if(isset($_GET['order_by']) && isset($_GET['sort'])){
            $orderby = ' order by '.$_GET['order_by'].' '.$_GET['sort'];
        }
        
        // fetch rows
        $sql = "SELECT * FROM users ".$orderby." limit $row,".$rowperpage;
        $result = mysqli_query($conn,$sql);
        $sno = $row + 1;
        while($fetch = mysqli_fetch_array($result)){
            $name = $fetch['first_name'];
            $salary = $fetch['last_name'];
            $gender = $fetch['alamat'];
            $city = $fetch['telnum'];
            $email = $fetch['email'];
            ?>
            <tr>
                <td align='center'><?php echo $sno; ?></td>
                <td align='center'><?php echo $name; ?></td>
                <td align='center'><?php echo $salary; ?></td>
                <td align='center'><?php echo $gender; ?></td>
                <td align='center'><?php echo $city; ?></td>
                <td align='center'><?php echo $email; ?></td>
            </tr>
            <?php
            $sno ++;
        }
        ?>
    </table>
    <form method="post" action="">
        <div id="div_pagination">
            <input type="hidden" name="row" value="<?php echo $row; ?>">
            <input type="hidden" name="allcount" value="<?php echo $allcount; ?>">
            <input type="submit" class="button" name="but_prev" value="Previous">
            <input type="submit" class="button" name="but_next" value="Next">
        </div>
    </form>
</div>
</body>
</html>