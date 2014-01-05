<?php

$output = shell_exec('./mytable note list --delete bear -a');
echo "<pre>$output</pre>";
