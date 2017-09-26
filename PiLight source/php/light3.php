<?php
include 'define.php';

if ($light3 == 1) {
    $gpio_on = shell_exec("/usr/local/bin/gpio -g write 4 0");
}
else {
    $gpio_off = shell_exec("/usr/local/bin/gpio -g write 4 1");
}

?>