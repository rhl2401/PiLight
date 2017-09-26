<?php
$setmode3 = shell_exec("/usr/local/bin/gpio -g mode out");

         if(isset($_POST['light1'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio -g write 2 0");
         }
         else if(!isset($_POST['light1'])){
		 sleep(20);
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 2 1");
         }
         
         if(isset($_POST['light2'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio -g write 3 0");
         }
         else if(!isset($_POST['light2'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 3 1");
         }
         
         if(isset($_POST['light3'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio -g write 4 0");
         }
         else if(!isset($_POST['light3'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 4 1");
         }
         
         if(isset($_POST['light4'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio -g write 5 0");
         }
         else if(!isset($_POST['light4'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 5 1");
         }
         
         if(isset($_POST['light5'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio -g write 6 0");
         }
         else if(!isset($_POST['light5'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 6 1");
         }
         
         if(isset($_POST['light6'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio -g write 7 0");
         }
         else if(!isset($_POST['light6'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 7 1");
         }
         
         if(isset($_POST['light7'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio -g write 8 0");
         }
         else if(!isset($_POST['light7'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 8 1");
         }
         
         if(isset($_POST['light8'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio -g write 9 0");
         }
         else if(!isset($_POST['light8'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 9 1");
         }
         
         if(isset($_POST['master-on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 2 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 3 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 4 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 5 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 6 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 7 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 8 0");
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
         header ('Location: ../index.php');
?>