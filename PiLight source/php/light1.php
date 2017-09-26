<?php
$light1 = shell_exec("/usr/local/bin/gpio -g read 2");

if ($light1 = 0) {
    $gpio_on = shell_exec("/usr/local/bin/gpio -g write 2 1");
}
else {
    sleep(20);
    $gpio_off = shell_exec("/usr/local/bin/gpio -g write 2 0");
}

?>