<?php
include 'define.php';

if ($light5 ==1) {
    $gpio_on = shell_exec("/usr/local/bin/gpio -g write 6 0");
}
else {
    $gpio_off = shell_exec("/usr/local/bin/gpio -g write 6 1");
}

?>