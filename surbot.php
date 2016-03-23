<?php
session_start();
include "control.html";
$action = $_GET['GO'];
$arg = $_GET['ARG'];
$shell="sudo /bin/bash /var/www/html/".$action.".sh ".$arg;
shell_exec($shell);

