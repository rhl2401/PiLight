<?php
if(isset($_POST['master-on'])){
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 2 0");
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 3 0");
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 4 0");
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 5 0");
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 6 0");
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 7 0");
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 8 0");
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 9 0");
    } elseif (isset($_POST['master-off'])){
        $gpio_off = shell_exec("/usr/local/bin/gpio -g write 2 1");
        $gpio_off = shell_exec("/usr/local/bin/gpio -g write 3 1");
        $gpio_off = shell_exec("/usr/local/bin/gpio -g write 4 1");
        $gpio_off = shell_exec("/usr/local/bin/gpio -g write 5 1");
        $gpio_off = shell_exec("/usr/local/bin/gpio -g write 6 1");
        $gpio_off = shell_exec("/usr/local/bin/gpio -g write 7 1");
        $gpio_off = shell_exec("/usr/local/bin/gpio -g write 8 1");
        $gpio_off = shell_exec("/usr/local/bin/gpio -g write 9 1");
    }
?>