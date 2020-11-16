<?php

include ('../../../Assets/database/db.php');
$mainclass = new MainClass();
session_destroy();

header('location:http://localhost/adcp/admin/pages/lockscreen/lock_screen.php');

 ?>