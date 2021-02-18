<?php
chdir('C:/Program Files/Oracle/VirtualBox');
$output = shell_exec('vboxmanage list vms');
return "<pre>$output</pre>";
?>