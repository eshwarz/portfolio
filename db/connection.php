<?php
// Example: $con['environment'] = 'mysql://username:password@localhost/test_database_name';

$con['development'] = 'mysql://root:@localhost/pavsesh';
// $con['test'] = 'mysql://username:password@localhost/test_database_name';
$con['production'] = 'mysql://pavseshc_cc:crazychums123@localhost/pavsesh_main';

$con['default'] = ENV;
?>
