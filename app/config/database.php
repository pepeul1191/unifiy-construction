<?php

ORM::configure('sqlite:' . 'app' . DIRECTORY_SEPARATOR . 'db' . DIRECTORY_SEPARATOR. 'db_demo.db',  null, 'demo');
ORM::configure('return_result_sets', true);
ORM::configure('error_mode', PDO::ERRMODE_WARNING);

?>
