<?php
include 'define.php';

if ($light2 == 1) {
    $gpio_on = shell_exec("/usr/local/bin/gpio -g write 3 0");
}
else {
    $gpio_off = shell_exec("/usr/local/bin/gpio -g write 3 1");
}

?>