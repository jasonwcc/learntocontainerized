<?php
phpinfo();
# CPU Information
    $cpu_info = shell_exec("cat /proc/cpuinfo | grep 'model name' | head -n 1");
    echo "CPU Model: " . trim(str_replace("model name : ", "", $cpu_info)) . PHP_EOL;
    echo "<br> \n";

# System Load Average
    $load_averages = sys_getloadavg();
    echo "Load Average (1 min): " . $load_averages[0] . PHP_EOL;
    echo "Load Average (5 min): " . $load_averages[1] . PHP_EOL;
    echo "Load Average (15 min): " . $load_averages[2] . PHP_EOL;
    echo "<br> \n";

# Disk space Information:
    $free_space_bytes = disk_free_space($path);
    $total_space_bytes = disk_total_space($path);
    echo "Free space on {$path}: " . round($free_space_bytes / (1024 * 1024 * 1024), 2) . " GB" . PHP_EOL;
    echo "Total space on {$path}: " . round($total_space_bytes / (1024 * 1024 * 1024), 2) . " GB" . PHP_EOL;
    echo "<br> \n";

?>
