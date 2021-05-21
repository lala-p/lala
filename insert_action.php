<?php

    include_once 'dbcon.php';

    $custno = $_GET['custno'];
    $custname = $_GET['custname'];
    $phone = $_GET['phone'];
    $address = $_GET['address'];
    $joindate = $_GET['joindate'];
    $grade = $_GET['grade'];
    $city = $_GET['city'];


    $query = "INSERT INTO member_tbl_02 VALUES ({$custno},'{$custname}','{$phone}','{$address}','{$joindate}','{$grade}','{$city}')";


    if(mysqli_query($conn, $query)):

        echo '<script> alert("회원등록이 완료 되었습니다!"); location.href = "./updateForm.php"; </script>';
        do_commit($conn);
    else:

        $erroNo = mysqli_errno($conn);
        echo $erroNo;

    endif;

    mysql_close($conn);     

?>