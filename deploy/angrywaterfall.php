<?php
echo 'Moving to proper directory <br/>';
echo shell_exec('cd ~/public_html/domains/greenfellowfarms.com');
echo 'Attempting git pull <br/>';
echo shell_exec('git pull origin master');
echo 'Terminating deploy script';
?>