<?php
echo "<pre>";
print_r($_GET);
$output = shell_exec("./mytable note del $_GET[id]");
echo "<pre>$output</pre>";
?>
<script>
alert("<?echo 'delete success'?>");
location.href="show.php";
</script>
