<?php
include("db_conn.php");
$time=date("Y-m-d g:i:s");
$sql="INSERT INTO note (message, new_time) VALUES ('$_POST[content]', '$time')";
echo "<br>SQL:$sql";
//exit;
$finish="留言完成";
mysql_query($sql); 
?>
<script>
alert("<?echo $finish?>");
location.href="show.php";
</script>
