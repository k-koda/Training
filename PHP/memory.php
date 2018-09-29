<?php

echo "first:".memory_get_usage() / (1024 * 1024)."MB\n";

$arr = [];
for($i=0;$i<100000;$i++) {
    $arr[] = $i;
}

echo "now:".memory_get_usage() / (1024 * 1024)."MB\n";

sleep(30);
?>
