<?php
include 'define.php';

if ($light8 == 1) {
    $gpio_on = shell_exec("/usr/local/bin/gpio -g write 9 0");
}
else {
    $gpio_off = shell_exec("/usr/local/bin/gpio -g write 9 1");
}

?>