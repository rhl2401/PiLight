<?php
include 'define.php';

if ($light6 == 1) {
    $gpio_on = shell_exec("/usr/local/bin/gpio -g write 7 0");
}
else {
    $gpio_off = shell_exec("/usr/local/bin/gpio -g write 7 1");
}

?>