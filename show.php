<?php
include("db_conn.php");
$sql="SELECT * FROM note ORDER BY id DESC";
$result=mysql_query($sql);
?>
<p><a href="add.php">我要留言</a></p>
<table width="500" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>標題</td>
    <td>內容</td>
    <td>留言者</td>
    <td>時間</td>
  </tr>
 
  <?php
  if(mysql_num_rows($result)>0)
  {
        $num=mysql_num_rows($result);
        for($i=0;$i<$num;$i++){
                $row=mysql_fetch_array($result);
                        echo "<tr>";
//                        echo "<td>".$row['title']."</td>";
                        echo "<td>".$row['message']."</td>";
                        echo "<td>".$row['update_time']."</td>";
                        echo "<td>".$row['new_time']."</td>";
                        echo "</tr>";
        }
 
  }
  ?>
</table>
