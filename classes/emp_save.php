<?php
  include("connect.php");
  if(isset($_POST['student_id'])){
  for ($count = 0; $count < sizeof($_POST['student_id']); $count++) {
    $result = $link->prepare("INSERT INTO student_tbl (stu_id,name,email,mobile,class) VALUES(:stu_id,:name,:email,:mobile,:class)");
    $stmt = $result->execute(array(':stu_id' => $_POST['student_id'][$count],':name' => $_POST['student_name'][$count],':email' => $_POST['student_email'][$count], ':mobile' => $_POST['student_mobile'][$count], ':class' => $_POST['student_class'][$count]));
  }
  if(isset($stmt)){
    echo "success";
  }
}

?>
