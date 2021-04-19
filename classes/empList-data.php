<?php
include("connect.php");

$emp_sql = "SELECT DISTINCT s.id,s.stu_id,s.name, s.email,s.mobile,s.class,s.created FROM student_tbl s ORDER BY s.id";

$table = <<<EOT
 ( $emp_sql ) temp
EOT;
$primaryKey = 'id';
$columns = array(
    array( 'db' => 'stu_id', 'dt' => '0',  'field' => 'stu_id' ),
    array( 'db' => 'name',  'dt' => '1',  'field' => 'name' ),
    array( 'db' => 'email',  'dt' => '2',  'field' => 'email' ),
    array( 'db' => 'mobile', 'dt' => '3' , 'field' => 'mobile'),
    array( 'db' => 'class', 'dt' => '4',  'field' => 'class' ),
    array( 'db' => 'created', 'dt' => 5,  'formatter' => function( $d, $row ) { return date( 'jS M Y', strtotime($d)); })
);

require('ssp.class.php');
echo json_encode(
    SSP::simple( $_GET, $link, $table, $primaryKey, $columns )
);
