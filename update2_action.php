<?php

    include_once 'dbcon.php';

    $custno = $_GET['custno'];
    $custname = $_GET['custname'];
    $phone = $_GET['phone'];
    $address = $_GET['address'];
    $joindate = $_GET['joindate'];
    $grade = $_GET['grade'];
    $city = $_GET['city'];


    $query = "UPDATE member_tbl_02 " 
            ." SET custname =  '{$custname}', phone =  '{$phone}', address =  '{$address}',"
            ." joindate =  '{$joindate}', grade =  '{$grade}', city = '{$city}'"
            ." WHERE custno = {$custno}";


    if(mysqli_query($conn, $query)):

        echo '<script type="text/javascript">'.' alert("회원정보 수정이 완료 되었습니다!");'.' location.href = "updateForm.php"; '.'</script>';
        do_commit($conn);
    else:

        $erroNo = mysqli_errno($conn);
        echo $erroNo;

    endif;


?>