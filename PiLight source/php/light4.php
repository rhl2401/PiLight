<?php
include 'define.php';

if ($light4 == 1) {
    $gpio_on = shell_exec("/usr/local/bin/gpio -g write 5 0");
}
else {
    $gpio_off = shell_exec("/usr/local/bin/gpio -g write 5 1");
}

?>