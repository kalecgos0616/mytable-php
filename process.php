<?php
if($_POST['act']='edit'){
	$message = '修改成功';
	$output = shell_exec("./mytable note update $_POST[id] $_POST[content]");
} else {
	$message = '留言成功';
	$output = shell_exec("./mytable note add $_POST[content]");
}
echo "<pre>$output</pre>";

?>
<script>
alert("<?echo $message?>");
location.href="show.php";
</script>
