<?php
include("db_conn.php");
$sql="SELECT * FROM note WHERE id = $_GET[id]";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);
?>
<form action="process.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <input type="hidden" name="act" value="<?php echo $_GET['act']?>" />
  <input type="hidden" name="id" value="<?php echo $_GET['id']?>" />
  <table width="500" border="1" cellspacing="0" cellpadding="0">
    <tr align="center">
      <td colspan="2">我要留言</td>
    </tr>
<!--    <tr>
      <td width="30%" align="center">
          姓名:
          </td>
      <td>
      <input type="text" name="name">
          </td>
    </tr>
    <tr>
      <td width="30%" align="center">
          標題:
          </td>
      <td>
      <input type="text" name="title">
          </td>
    </tr> -->
    <tr>
      <td width="30%" align="center">
          內容:
          </td>
      <td>
      <textarea name="content" cols="45" rows="5"><?php echo $row['message'] ?></textarea>
          </td>
    </tr>
    <tr>
      <td colspan="2">
          <input type="reset" name="Reset" value="重新填寫" >
          <input type="submit" name="Submit"value="送出">
          </td>
    </tr>
  </table>
</form>
