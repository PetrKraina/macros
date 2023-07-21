<?php

require_once 'Macros/Timestamp.php';

use Mavi\Macros\Timestamp;

echo Timestamp::set('./style.css');


/* <link rel="stylesheet" href="<?php echo Timestamp::set('./style.css'); ?>"> */