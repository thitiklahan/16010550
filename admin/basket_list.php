<?php 
  if(@$_GET['do']=='success'){
    echo '<script type="text/javascript">
          swal("", "ทำรายการสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=bank.php" />';

  }else if(@$_GET['do']=='finish'){
    echo '<script type="text/javascript">
          swal("", "แก้ไขสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=bank.php" />';

  }else if(@$_GET['do']=='wrong'){
    echo '<script type="text/javascript">
          swal("", "รหัสผ่านใหม่ไม่ตรงกัน !!", "warning");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=bank.php" />';

  }else if(@$_GET['do']=='error'){
    echo '<script type="text/javascript">
          swal("", "ผิดพลาด !!", "error");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=bank.php" />';
  }

$query = "SELECT * FROM basket ORDER BY bs_id DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
// echo"$query";
// exit();

echo '<table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class=''>
    <th width='15%'>รหัสรายการสินค้า</th>
      <th width='7%' class='hidden-xs'>รูป</th>
      <th width='10%'>รหัสสินค้า</th>
      <th width='15%'>จำนวนสินค้า</th>
      <th width='10%'>รหัสลูกค้า</th>
      <th width='15%'>ชื่อผู้สั่ง</th>
      <th width='10%'>เบอร์โทร</th>
      <th width='15%'>ที่อยู่</th>
      <th width='7%'></th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" .$row["id"] .  "</td> ";
    echo "<td class='hidden-xs'>"."<img src='../bs_img/".$row['bs_img']."' width='70%'>"."</td>";
    echo "<td>" .$row["bs_id"] .  "</td> ";
    echo "<td class='hidden-xs'>".$row["bs_unit"]."</td> ";
    echo "<td>".$row["bs_iduser"]."</td>";
    echo "<td>".$row["bs_nameus"]."</td> ";
     echo "<td>".$row["bs_tal"]."</td>";
    echo "<td>".$row["bs_address"]."</td> ";
    echo "<td>   
          <a href='basket_del.php?ID=$row[id]' onclick=\"return confirm('ยืนยันรายการสั่งซื้อ')\" class='btn btn-success btn-xs'><span class='fa fa-check-square'></span></a>
    </td> ";
   
  } 
echo "</table>";
mysqli_close($con);
?>