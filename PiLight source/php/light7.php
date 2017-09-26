<?php
include 'define.php';

if ($light7 == 1) {
    $gpio_on = shell_exec("/usr/local/bin/gpio -g write 8 0");
}
else {
    $gpio_off = shell_exec("/usr/local/bin/gpio -g write 8 1");
}

?>